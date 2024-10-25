<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'app'], function () {
    Route::get('commands', [App\Http\Controllers\CommandController::class, 'index'])->name('commands.index');
});

Route::get('/', function () {
    return view('welcome');
});
