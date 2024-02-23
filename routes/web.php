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
Route::get('programs', [LandingController::class, 'program'])->name('programs');
Route::get('sign-in', [LandingController::class, 'signin'])->name('auth/sign-in');
Route::get('sign-up', [LandingController::class, 'signup'])->name('auth/sign-up');



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
