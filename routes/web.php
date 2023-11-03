<?php

use App\Http\Controllers\Admin\SuportController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/supports', [SuportController::class, 'index'])->name('supports.index');


Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
