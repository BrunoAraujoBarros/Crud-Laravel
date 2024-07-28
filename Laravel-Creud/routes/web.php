<?php

use App\Models\Cadastro;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Event;

Route::get('/', [Event::class, 'create']);
Route::post('/cadastro', [Event::class, 'store'])->name('cadastro.store');
Route::delete('/delete/{id}', [Event::class, 'destroy'])->name('cadastro.destroy');
Route::get('/update/{id}', [Event::class, 'edit'])->name('cadastro.edit');
Route::put('/update/{id}', [Event::class, 'update'])->name('cadastro.update');


Route::get('listAll', function () {
    return view('listAll');
})->name('listAll');

Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/listAll', [Event::class, 'index'])->name('listAll');