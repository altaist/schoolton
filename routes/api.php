<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\Crud\CrudApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('crud')->group(function() {
    Route::get('{type}/{id}', [CrudApiController::class, 'show'])->name('crud.api.show');
    Route::get('{type}/', [CrudApiController::class, 'index'])->name('crud.api.index');
    Route::get('{type}/{id}/childs/{childs_type}', [CrudApiController::class, 'childs'])->name('crud.api.childs');
    Route::get('{type}/{id}/parent', [CrudApiController::class, 'parent'])->name('crud.api.parent');
    Route::get('{type}/{id}/user', [CrudApiController::class, 'user'])->name('crud.api.user');

    Route::post('{type}/', [CrudApiController::class, 'store'])->name('crud.api.store');
    Route::put('{type}/{id}', [CrudApiController::class, 'update'])->name('crud.api.update');
    Route::delete('{type}/{id}', [CrudApiController::class, 'destroy'])->name('crud.api.destroy');
});


Route::post('/gpt', [CourseController::class, 'createGpt'])->name('gpt');

Route::prefix('api', function () {
});
