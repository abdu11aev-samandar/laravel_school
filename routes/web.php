<?php

use App\Http\Controllers\GroupController;
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
Route::get('/detail', [PageController::class, 'detail'])->name('detail');

Route::get('/submitted-assignment', [PageController::class, 'submitted_assignment'])->name('marks.submitted-assignment');
Route::get('/submitted-mark', [PageController::class, 'submitted_mark'])->name('marks.submitted-mark');
Route::get('/submit-mark', [PageController::class, 'submit_mark'])->name('assignments.submit-mark');
Route::get('/submit-assignment', [PageController::class, 'submit_assignment'])->name('assignments.submit-assignment');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('message/{message}/read', [Message::class, 'read'])->name('message.read');
    Route::get('assignments/{assignment}/answer', [Assignment::class, 'create'])->name('assignment.create');
    Route::post('assignments/{assignment}/answer', [Assignment::class, 'store'])->name('assignment.store');
});

Route::resources([
    'assignment' => Assignment::class,
    'message' => Message::class,
    'users' => UserController::class,
    'group' => GroupController::class
]);

require __DIR__ . '/auth.php';
