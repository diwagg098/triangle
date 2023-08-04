<?php

use App\Http\Livewire\Triangle;
use App\Http\Livewire\TriangleNumber;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/triangle', Triangle::class);
Route::get('/triangle-number', TriangleNumber::class);


