<?php

use App\Http\Controllers\SetupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Welcome', [
        'username' => 'yannbanvi'
    ]);
});

Route::get('/auth', function () {
    return inertia('Welcome', [
        'username' => 'yannbanvi'
    ]);
})->name('auth.index');

Route::prefix('setup')
->name('setup.')
->controller(SetupController::class)
->group(base_path('routes/customs/setup.php'));

