<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'app'], function () {
    Route::get('commands/create', [App\Http\Controllers\CommandController::class, 'create'])->name('commands.create');
    Route::post('commands', [App\Http\Controllers\CommandController::class, 'store'])->name('commands.store');
    Route::get('commands', [App\Http\Controllers\CommandController::class, 'index'])->name('commands.index');
});

Route::get('/', function () {
    return view('layouts.app');
});
