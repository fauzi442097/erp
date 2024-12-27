<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/get_data', [UserController::class, 'getData'])->name('users.get_data');
        Route::get('/{user}', [UserController::class, 'show'])->name('user.show', ['user' => 'user']);
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.delete', ['user' => 'user']);
        Route::patch('/{user}/toogle_aktif', [UserController::class, 'activeDeactiveUser'])->name('users.delete', ['user' => 'user']);
        Route::post('/', [UserController::class, 'store'])->name('users.store');
    });
});



require __DIR__ . '/auth.php';
