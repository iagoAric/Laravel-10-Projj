<?php

use App\Enums\SupportStatus;
use App\Http\Controllers\Admin\SuportController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;


Route::delete('/supports/{id}', [SuportController::class, 'destroy'])->name('supports.destroy');
Route::put('/supports/{id}',[SuportController::class, 'update'])->name('supports.update');
Route::get('/supports/{id}/edit', [SuportController::class, 'edit'])->name('supports.edit');
Route::get('/supports/create',[SuportController::class, 'create'])->name('supports.create');
Route::get('/supports/{id}', [SuportController::class, 'show'])->name('supports.show');
Route::post('/supports', [SuportController::class, 'store'])->name('supports.store');
Route::get('/supports', [SuportController::class, 'index'])->name('supports.index');


Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
