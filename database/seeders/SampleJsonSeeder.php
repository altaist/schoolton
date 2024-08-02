<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Point;
use App\Models\Qr;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class SampleJsonSeeder extends JsonSeeder
{
    // use JSONSeeder;
    /*
    protected $file = "json/qrs.json";
    protected $table = "qrs";
    protected $modelClass = Qr::class;
    protected $relationsConfig = [

    ];
    */
    protected $file = "json/courses.json";
    protected $table = "courses";
    protected $modelClass = Course::class;
    protected $relationsConfig = [
        'topics' => [
            'table' => 'topics',
            'class' => Topic::class,
            //'foreign_key' => 'course_id',
            'many_to_many' => true,
            'flush' => false
        ]
    ];

    protected $config = [
        'course' => [
            'relations' => [
                'topics' => [
                    'table' => 'topics',
                    'class' => Topic::class,
                    //'foreign_key' => 'course_id',
                    'many_to_many' => true,
                    'flush' => false
                ]
            ]
        ],
        'topic' => [
            'relations' => [
                'points' => [
                    'table' => 'points',
                    'class' => Point::class,
                    //'foreign_key' => 'course_id',
                    'many_to_many' => true,
                    'flush' => false
                ]
            ]
        ]

    ];

    public function run(): void
    {

        foreach ($this->config as $key => $object) {
            $modelClass = data_get($object, 'model', "App\\Models\\" . Str::ucfirst($key));
            $this->JSONSeed(Str::plural($key), $modelClass, $this->relationsConfig);
        }
    }
}
