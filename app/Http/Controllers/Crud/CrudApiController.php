<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;

class CrudApiController extends BaseCrudController
{

    /**
     * Display a listing of the resource.
     */
    public function index(string $type)
    {
        return $this->getService($type)->getItemsCollection([]);
    }

    /**
     * Display an item of the resource.
     */
    public function show(string $type, string $id)
    {
        return $this->getService($type)->getItem($id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $type)
    {
        return $this->getService($type)->store($request);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $type, string $id)
    {
        return $this->getService($type)->update($id, $request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $type, string $id)
    {
        return $this->getService($type)->destroy($id);
    }
}
