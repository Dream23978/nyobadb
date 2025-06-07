<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\logix;

Route::get('/', function () {
    return view('masuk.index');
});

Route::post('/masuk',[logix::class,'login'])->name('logix.login');


require __DIR__.'/auth.php';
