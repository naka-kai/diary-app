<?php

use App\Http\Controllers\DiaryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::get('/', [DiaryController::class, 'index'])->name('index');
Route::get('/create', [DiaryController::class, 'create'])->name('create');
Route::post('/store', [DiaryController::class, 'store'])->name('store');
Route::get('/show/{id}', [DiaryController::class, 'show'])->name('show');
Route::get('/edit/{id}', [DiaryController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [DiaryController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [DiaryController::class, 'destroy'])->name('destroy');
