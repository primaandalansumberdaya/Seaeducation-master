<?php

use Illuminate\Support\Facades\Route;

// front
use App\Http\Controllers\Landing\LandingController;

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

Route::resource('/', LandingController::class);
Route::get('about-us', [LandingController::class, 'about'])->name('about-us');
Route::get('affiliate', [LandingController::class, 'affiliate'])->name('affiliate');
Route::get('partnership', [LandingController::class, 'partnership'])->name('partnership');
Route::get('blog', [LandingController::class, 'blog'])->name('blog');



// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('pages/landing/index');
// });
// Route::get('/about-us', function () {
//     return view('pages/landing/about-us');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
