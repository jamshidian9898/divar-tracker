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
use App\Livewire\Authentication\Authentication;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Requests\Index;
use App\Livewire\Setting\Setting;

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Login::class)->name('register');

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/requests', Index::class)->name('requests');
Route::get('/authentication', Authentication::class)->name('authentication');
Route::get('/setting', Setting::class)->name('setting');
