<?php

use App\Http\Controllers\Crud\CrudController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderViewController;
use App\Http\Controllers\PaymentSuccessController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index'])->name('root');
Route::get('/astro-order', function () {
    return Inertia::render('astro/AstroOrder', []);
})->name('astro.order');

Route::get('/bye', function () {
    return Inertia::render('Logout', []);
})->name('logouted');

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
    return Inertia::render('Qr', []);
})->name('qr');

Route::get('/astro', function () {
    return Inertia::render('astro/Astro', []);
})->name('qr');

Route::get('/crud', function () {
    return Inertia::render('Crud/Crud', [
        'crudConfig' => config('crud.qr')
    ]);
})->name('crud.qr');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::prefix('orders')->group(function () {
    Route::post('/', [OrderController::class, 'store'])->name('order.store');
    Route::get('/item/{id}', [OrderController::class, 'getItem'])->name('order.item');
    Route::get('/user/{user}', [OrderController::class, 'getOrdersForUser'])->name('order.user');
});
Route::prefix('payments')->group(function () {
    Route::post('/', [PaymentController::class, 'store'])->name('payment.store');
    Route::put('/{payment}', [PaymentController::class, 'update'])->name('payment.update.state');
    Route::put('/{payment}/state', [PaymentController::class, 'updateState'])->name('payment.update.state');
    Route::post('/{order}/complete/{sum}', [PaymentController::class, 'completePayment'])->name('payment.complete');
    Route::delete('/{payment}', [PaymentController::class, 'destroy'])->name('payment.update.state');
});




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

Route::middleware(['web'])->group(function () {
    Route::prefix('lk')->group(function () {

        Route::get('/', [ProfileController::class, 'showLk'])->name('lk');

        Route::get('student/{type}/{id}', [CrudController::class, 'show'])->name('crud.show');
        Route::get('student/{type}', [CrudController::class, 'index'])->name('crud.index');
        /*
        Route::get('/{type}/create', [CrudController::class, 'create'])->name('crud.create');
        Route::get('/{type}/edit', [CrudController::class, 'edit'])->name('crud.edit');
        Route::get('/{type}/{id}/{child_type}', [CrudController::class, 'childs'])->name('crud.childs');
        */
    });

    Route::get('/authlk', function () {
        return Inertia::render('Dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

Route::get('/order/{orderId}', [OrderViewController::class, 'show'])->name('order.show');
Route::post('/order/{orderId}/update', [OrderViewController::class, 'update'])->name('order.update');

Route::get('/success_pay', [PaymentSuccessController::class, 'show'])
    ->name('payment.success');

Route::get('/payment/check-status/{inv_id}', [PaymentSuccessController::class, 'checkStatus'])
    ->name('payment.check-status');

// Админка
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.orders');

// Отдельная группа для платежных уведомлений
Route::middleware(['api'])->group(function () {
    Route::match(['get', 'post'], '/get_pay', [PaymentController::class, 'handlePayment'])
        ->name('payment.handle')
        ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
});

Route::post('/admin/orders/send-file', [\App\Http\Controllers\Admin\OrderController::class, 'sendFile'])->name('admin.orders.send-file');

Route::get('/download-example', function() {
    return response()->download(public_path('example.pdf'));
})->name('download.example');

Route::get('/', function () {
    // Получаем параметр redir из GET запроса
    $redir = request()->query('redir', '');
    
    // Определяем версию на основе значения redir
    switch ($redir) {
        case '?h=e7d31fc8':  // Главный блок (B)
            return view('astro2_b');
        case '?h=a9f42b3d':  // Отдельный блок (A)
            return view('astro2');
        default:
            return view('astro2');
    }
})->name('home');

