<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Index\Index;
use App\Livewire\Profile\Authentication;
use App\Livewire\Profile\Setting;

Route::get('/', Index::class)->name('index');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::prefix('/requests')->group(function () {
        Route::get('/', Index::class)->name('requests.list');
    });
    Route::get('/authentication', Authentication::class)->name('authentication');
    Route::get('/setting', Setting::class)->name('setting');
});
