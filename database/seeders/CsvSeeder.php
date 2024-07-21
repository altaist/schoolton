<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

abstract class CsvSeeder extends Seeder
{
    public $file = null;

    public $table = null;

    public $defaultValues = [];

    public $delimeter = ';';

    public $skipIfCountsMatch = false;

    public $columns = null;

    public $needTruncate = true;

    public function run()
    {
        $batchInserts = $this->getCsvRecords();

        if ($this->skipIfCountsMatch && DB::table($this->table)->count() == count($batchInserts)) {
            $this->comment('skipped, no new items to create');
            return;
        }

        if($this->needTruncate){
            DB::table($this->table)->truncate();
        }
        foreach (array_chunk($batchInserts, 1000) as $chunk) {
            DB::table($this->table)->insert(
                $chunk
            );
        }

        if ($this->skipIfCountsMatch) {
            $this->comment('seeded');
        }
    }

    public function getCsvRecords(): array {
        if (is_null($this->file) || is_null($this->table)) {
            throw new \Exception(get_class($this) . ' is not configured!');
        }

        /* @var League\Csv\MapIterator $records */
        $records = $this->reader()->getIterator();
        $batchInserts = [];
        $columns = $this->columns ?? DB::getSchemaBuilder()->getColumnListing($this->table);
        foreach ($records as $record) {
            $record = $this->beforeInsert($record);
            $insert = Arr::only($record, $columns);

            if (count($this->defaultValues)){
                foreach ($this->defaultValues as $field => $value)
                    if(in_array($field, $columns) && (!array_key_exists($field, $insert) || $insert[$field] == null)){
                        $insert[$field]= $value;
                    }
            }

            $batchInserts[] = $insert;
        }

        return $batchInserts;
    }

    protected function reader()
    {
        return Reader::createFromPath($this->filePath())
            ->setDelimiter($this->delimeter)
            ->setHeaderOffset(0);
    }

    protected function filePath()
    {
        $possibleLocalFile = preg_replace('/\.csv$/', '.local.csv', $this->file);
        return (app()->environment('local', 'testing') && is_file(__DIR__ . '/' . $possibleLocalFile))
            ? __DIR__ . '/' . $possibleLocalFile
            : __DIR__ . '/' . $this->file;
    }

    protected function beforeInsert($record)
    {
        $merged = array_merge($record, [
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        return collect($merged)
            ->filter()
            ->filter(function ($value) {
                return strtolower($value) != 'null';
            })
            ->toArray();
    }

    protected function comment($line)
    {
        $line = get_class($this).': '.$line;
        if ($this->command) {
            $this->command->getOutput()->writeln('<comment>'.$line.'</comment>');
        } else {
            echo $line.PHP_EOL;
        }
    }
}
