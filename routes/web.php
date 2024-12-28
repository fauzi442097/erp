<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::post('update_password', [ProfileController::class, 'updatePassword'])->name('update_password');
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

    Route::prefix('users')->group(function () {
        Route::controller(App\Http\Controllers\UserController::class)->group(function () {
            Route::get('/', 'index')->name('users.index');
            Route::get('/get_data', 'getData')->name('users.get_data');
            Route::get('/{user}', 'show')->name('user.show', ['user' => 'user']);
            Route::delete('/{user}', 'destroy')->name('users.delete', ['user' => 'user']);
            Route::patch('/{user}/toogle_aktif', 'activeDeactiveUser')->name('users.delete', ['user' => 'user']);
            Route::post('/', 'store')->name('users.store');
        });
    });

    Route::prefix('roles')->group(function () {
        Route::controller(App\Http\Controllers\RoleController::class)->group(function () {
            Route::get('/', 'index')->name('roles.index');
            Route::get('/form/{action}/{id?}', 'form')->name('roles.form', ['action' => 'action']);
            Route::post('/', 'store')->name('roles.store');
        });
    });
});



require __DIR__ . '/auth.php';
