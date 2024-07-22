<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index']);
Route::get('/main', function () {
    return Inertia::render('Main', []);
})->name('main');
Route::get('/quiz', function () {
    return Inertia::render('Quiz', []);
})->name('quiz');

Route::get('/generator', function () {
    return Inertia::render('Generator', []);
})->name('generator');

Route::get('/qr', function () {
    return Inertia::render('Qr/Qr', []);
})->name('qr');

Route::get('/crud', function () {
    return Inertia::render('Crud/Crud', [
        'crudConfig' => config('crud.qr')
    ]);
})->name('crud.qr');

Route::get('/api/crud/{type}', [CrudController::class, 'index'])->name('crud.list');
Route::get('/api/crud/{type}/{id}', [CrudController::class, 'show'])->name('crud.item');
Route::get('/api/crud/{type}/{id}/childs/{childs_type}', [CrudController::class, 'childs'])->name('crud.childs');
Route::get('/api/crud/{type}/{id}/parent', [CrudController::class, 'parent'])->name('crud.parent');
Route::get('/api/crud/{type}/{id}/user', [CrudController::class, 'user'])->name('crud.user');
Route::post('/api/crud/{type}/', [CrudController::class, 'store'])->name('crud.create');
Route::patch('/api/crud/{type}/{id}', [CrudController::class, 'update'])->name('crud.update');
Route::post('/api/crud/{type}/{id}', [CrudController::class, 'detroy'])->name('crud.delete');


Route::post('/api/gpt', [CourseController::class, 'createGpt'])->name('gpt');



    // course
    //      get course/
    //      get org/{org_id}/course/
    //      get course/{id}
    //
    // task
    //      get course/{course_id}/task
    //      get task/{id}
    //      post task/{id}/results
    //      get task/{id}/rating
    //
    // rating
    //      get rating/ -- дольше всего, больше всего, быстрее всего
    //      ...
    //
    // payments
    //      post user/{user_id}/payment{task_id}
    //
    // user
    //      get user/{user_id}/profile
    //      get user/{user_id}/rating
    //      get user/{user_id}/balance
    //      get user/{user_id}/payments
    //



Route::prefix('course')->group(function () {
});
Route::prefix('task')->group(function () {
});

Route::middleware('auth')->group(function () {
    Route::get('/lk', function () {
        return Inertia::render('Dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
