<?php

namespace App\Services\Crud;

use App\Services\BaseService;
use Inertia\Inertia;
use Illuminate\Support\Str;

class BaseCrudService extends BaseService
{
    protected $crudConfig = null;
    protected $type = null;
    protected $modelClass = null;

    public function __construct($crudConfig)
    {
        $this->crudConfig = $crudConfig;
        $this->type = $crudConfig['type'];
        $this->modelClass = $this->getModelClass($this->type);
    }

    protected function getConfig(string $type)
    {
        return config('crud.'.$type);
    }

    protected function getConfigValue(string $key, $def = null)
    {
        return data_get($this->crudConfig, $key, $def);
    }

    protected function convertTypeToComponentName()
    {
        return Str::ucfirst($this->type);
    }

    protected function convertTypeToModelClass()
    {
        return 'App\\Models\\' . Str::ucfirst($this->type);
    }

    protected function convertTypeToModelResourceClass()
    {
        return 'App\\Http\\Resources\\' . Str::ucfirst($this->type) . "Resource";
    }

    protected function convertTypeToModelResourceCollectionClass()
    {
        return 'App\\Http\\Resources\\' . Str::ucfirst($this->type) . "Collection";
    }

    protected function getModelClass(string $type)
    {
        $config = $this->getConfig($type);
        $className = data_get($config, 'model', $this->convertTypeToModelClass());
        return $className;
    }

    protected function getModelInstance($id = null, array $with = [])
    {
        if($id === null) {
            return app($this->modelClass);
        }

        $model = $this->modelClass::with($with)->findOrFail($id);
        // throw_if(!$model, 'Wrong item id for type ' . $this->type);
        return $model;
    }

    public function getItem($id)
    {
        return $this->getModelInstance($id);
    }

    public function getItemsCollection($filter)
    {
        $model = $this->modelClass;
        return $model::query()->get();
    }

    public function store($request)
    {
        $model = $this->getModelInstance(null);
        $model->fill($request->all());
        $model->save();
        return $model;
    }

    public function update($id, $request)
    {
        $model = $this->getModelInstance($id);
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
