<?php

use App\Livewire\FrontPage;
use Illuminate\Support\Facades\Route;


Route::get('/', FrontPage::class)->name('index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
