<?php

namespace App\Services\Crud;

use App\Services\BaseService;

class BaseCrudService extends BaseService
{
    protected function getConfig(string $type)
    {
        return config('crud.'.$type);
    }

    protected function getModel(string $type)
    {
        $config = $this->getConfig($type);
        $className = 'App\\Models\\' . $config['model'];
        return app($className);
    }

    public function store($type, $request)
    {
        $config = $this->getConfig($type);
        $model = $this->getModel($type);
        // dd($config, $model);
    }

}
