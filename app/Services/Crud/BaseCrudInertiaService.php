<?php

namespace App\Services\Crud;

use Inertia\Inertia;

class BaseCrudInertiaService extends BaseCrudService
{
    public function show($id)
    {
        $componentName = $this->getConfigValue('component', $this->convertTypeToComponentName());
        $item = $this->getModelInstance($id);
        $resourceClass = $this->convertTypeToModelResourceClass();
        $resultData = class_exists($resourceClass) ? (new $resourceClass($item))->toArray(request()) : $item;

        return Inertia::render($componentName, ["item" => $resultData]);
    }

    public function index($filter = null)
    {
        $componentName = $this->getConfigValue('component_list', $this->convertTypeToComponentName().'List');
        $items = $this->getItemsCollection($filter);
        return Inertia::render($componentName, ["items" => $items]);
    }

}
