<?php

namespace App\Http\Controllers;

use App\Models\Qr;
use App\Services\Crud\BaseCrudService;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    protected function getConfig(string $type)
    {
        return config('crud.'.$type);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(string $type)
    {
        $config = config('crud.'.$type);
        dd($config);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(string $type, Request $request)
    {
        return BaseCrudService::make()->store($type, $request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
