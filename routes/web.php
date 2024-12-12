<?php

use App\Livewire\Dashboard;
use App\Livewire\Home;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

//  RoleMiddleware::class . ':admin']
Route::get('/', function () {
    return view('welcome');
});

\Livewire\Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/custom/livewire/v3/update', $handle);
});

\Livewire\Livewire::setScriptRoute(function ($handle) {
    return Route::get('/custom/livewire/v3/livewire.js', $handle);
});

  // cache
Route::get('/config-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    return redirect()->back()->with('success', 'Cache Clear Successfully');
})->name('config.cache');



Route::get('/', Home::class)
    ->name('home');

Route::middleware(['auth'])->group(function () {

    // Route::get('/dashboard', Dashboard::class)
    //     ->name('dashboard');


    // Route::get('/profile', Profile::class)
    //     ->name('profile');

    Route::get('/profile', Profile::class)->name('profile');

    Route::get('/dashboard', Dashboard::class)->name('dashboard');
});

require __DIR__ . '/auth.php';
