<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ProductController;
use App\Http\Controllers\Auth\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::get('/debug-auth', function () {
    return Auth::check() ? 'Authenticated' : 'Not Authenticated';
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/userdashboard', function () {
        return view('userdashboard');
    })->name('userdashboard');

    Route::post('/users', [AuthController::class, 'store'])->name('users.store');

    Route::get('/users', [UserController::class, 'showUsers'])->name('users.index');

    // Show edit form
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

    // Update user
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

    // Delete user
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    // Parokia Page

    Route::get('/parokia',[ProductController::class,'parokiaPage'])->name('parokia');
    Route::get('/religio',[ProductController::class,'religioPage'])->name('religio');
    Route::get('/cathedra',[ProductController::class,'cathedraPage'])->name('cathedra');
    Route::get('/charisma',[ProductController::class,'charismaPage'])->name('charisma');
});
