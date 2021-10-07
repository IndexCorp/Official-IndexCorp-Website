<?php

use App\Http\Livewire\Home\ContactComponent;
use App\Http\Livewire\Home\HomeComponent;
use App\Http\Livewire\Home\PortfolioComponent;
use App\Http\Livewire\Home\ServicesComponent;
use App\Http\Livewire\Home\TeamComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeComponent::class);
// Route::get('/about', HomeComponent::class)->name('home.about');
Route::get('/services', ServicesComponent::class)->name('home.services');
Route::get('/portfolio', PortfolioComponent::class)->name('home.portfolio');
Route::get('/team', TeamComponent::class)->name('home.team');
Route::get('/contact', ContactComponent::class)->name('home.contact');

Route::get('/temp', function () {
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
