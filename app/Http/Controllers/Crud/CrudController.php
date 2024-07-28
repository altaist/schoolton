<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;

class CrudController extends BaseCrudController
{
    protected function getService(string $type)
    {
        return $this->makeService($type, 'BaseCrudInertiaService');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(string $type)
    {
        return $this->getService($type)->index([]);
    }

    /**
     * Display an item of the resource.
     */
    public function show(string $type, string $id)
    {
        return $this->getService($type)->show($id);
    }

}
