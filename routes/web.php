<?php

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

Route::get('/setup', function () {
    return inertia('Welcome', [
        'username' => 'yannbanvi'
    ]);
})->name('setup.index');
