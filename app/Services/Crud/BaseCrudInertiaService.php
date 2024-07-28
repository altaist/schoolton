<?php

namespace App\Services\Crud;

use Inertia\Inertia;

class BaseCrudInertiaService extends BaseCrudService
{
    public function show($id)
    {
        $componentName = $this->getConfigValue('vue_component_item', $this->convertTypeToModelName());
        $item = $this->getModelInstance($id);
        return Inertia::render($componentName, ["item" => $item]);
    }

    public function index($filter = null)
    {
        $componentName = $this->getConfigValue('vue_component_list', $this->convertTypeToModelName().'List');
        $items = $this->getItemsCollection($filter);
        return Inertia::render($componentName, ["items" => $items]);
    }

}
