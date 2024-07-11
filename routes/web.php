<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Start', []);
});
Route::get('/main', function () {
    return Inertia::render('Main', []);
})->name('main');
Route::get('/quiz', function () {
    return Inertia::render('Quiz', []);
})->name('quiz');

Route::get('/generator', function () {
    return Inertia::render('Generator', []);
})->name('generator');


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
