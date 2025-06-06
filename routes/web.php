<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\logix;



Route::get('/masuk', [logix::class, 'tampilkan_halaman'])->name('logix.login');
Route::post('/masuk',[logix::class,'login'])->name('logix.login');


require __DIR__.'/auth.php';
