<?php

use App\Livewire\About;
use App\Livewire\Counter;
use App\Livewire\Home;
use App\Livewire\Users;
use Illuminate\Support\Facades\Route;

Route::get('/counter', Counter::class);
// Route::get('/users', Users::class);

Route::get('/', Home::class);
Route::get('/users', Users::class);
Route::get('/about', About::class);
