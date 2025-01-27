<?php

use App\Http\Controllers\HomeInvoke;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TranslateInvoke;
use Illuminate\Support\Facades\Route;

Route::get('', HomeInvoke::class)->name('home');

Route::get('translate/{locale}', TranslateInvoke::class)->name('translate');

Route::resource('news', NewsController::class);
