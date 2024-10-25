<?php

use App\Livewire\Dashboard;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

Route::get('/dashboard', Dashboard::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/profile', Profile::class)
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';