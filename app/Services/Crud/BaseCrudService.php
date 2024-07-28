<?php

namespace App\Services\Crud;

use App\Services\BaseService;
use Inertia\Inertia;
use Illuminate\Support\Str;

class BaseCrudService extends BaseService
{
    protected $crudConfig = null;
    protected $type = null;
    protected $model = null;

    public function __construct($crudConfig)
    {
        $this->crudConfig = $crudConfig;
        $this->type = $crudConfig['type'];
        $this->model = $this->getModel($this->type);
    }

    protected function getConfig(string $type)
    {
        return config('crud.'.$type);
    }

    protected function getConfigValue(string $key, $def = null)
    {
        return data_get($this->crudConfig, $key, $def);
    }

    protected function convertTypeToModelName()
    {
        return Str::ucfirst($this->type);
    }


    protected function getModel(string $type)
    {
        $config = $this->getConfig($type);
        $className = 'App\\Models\\' . $config['model'];
        return app($className);
    }

    protected function getModelInstance($id)
    {
        $model = $this->model->find($id);
        throw_if(!$model, 'Wrong item id');
        return $model;
    }

    public function getItem($id)
    {
        return $this->getModelInstance($id);
    }

    public function getItemsCollection($filter)
    {
        $model = $this->model;
        return $model->query()->get();
    }

    public function store($request)
    {
        $model = $this->model;
        $model->fill($request->all());
        $model->save();
        return $model;
    }

    public function update($id, $request)
    {
        $model = $this->getModelInstance($id);
        throw_if(!$model);
        $model->fill($request->all());
        $model->save();
        return $model;
    }

    public function destroy($id)
    {
        $model = $this->getModelInstance($id);
        return $model->delete();
    }

}
