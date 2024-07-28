<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\BaseController;

class BaseCrudController extends BaseController
{
    protected function getConfig(string $type): array
    {
        return config('crud.'.$type);
    }

    protected function makeService(string $type, $def = 'BaseCrudApiService')
    {
        $config = $this->getConfig($type);
        $serviceClass = 'App\\Services\\' . data_get($config, 'service', 'Crud\\' . $def);
        $service = app()->make($serviceClass, ['crudConfig' => $config]);
        return $service;
    }

    protected function getService(string $type)
    {
        return $this->makeService($type);
    }

}
