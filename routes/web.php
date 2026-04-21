<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;

// PART 1: The Public Landing Page (No Redirects here!)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// PART 2: The Login Trigger (Sets the session for Kent's Moto)
Route::get('/login-trigger', function () {
    session(['user_logged_in' => true]);
    return redirect()->route('customers.index');
})->name('login.trigger');

// PART 3: The Customer Directory (Protected by Controller logic)
Route::resource('customers', CustomerController::class);

// PART 4: Standard Laravel Auth Routes (Breeze)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/switch-operator', [App\Http\Controllers\CustomerController::class, 'switchOperator'])->name('operator.switch');

require __DIR__ . '/auth.php';
