<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Assignment;
use App\Models\Message;
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

Route::get('/', [PageController::class, 'main'])->name('main');

Route::get('/dashboard', [PageController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('message/{message}/read', [Message::class, 'read'])->name('message.read');
    Route::get('applications/{assignment}/answer', [Assignment::class, 'create'])->name('assignment.create');
    Route::post('applications/{assignment}/answer', [Assignment::class, 'store'])->name('assignment.store');
});

Route::resources([
    'assignment' => Assignment::class,
    'message' => Message::class,
    'users' => UserController::class

]);

require __DIR__ . '/auth.php';
