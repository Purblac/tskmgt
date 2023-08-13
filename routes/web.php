<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ToolsController;

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
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/confirm', [RegisterController::class, 'store'])->name('confirm');

Route::middleware(['guest', 'no-cache'])->group(function () {

    Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/login', [LoginController::class, 'login'])->name('login'); // Use 'login' as the route name
Route::post('/login/check', [LoginController::class, 'check'])->name('login.check');
});
Route::middleware(['auth','no-cache'])->group(function () {
    // Protected routes go here
Route::get('/dashboard', [TaskController::class, 'dashboard'])->name('dashboard');

Route::get('/tasks/create', [TaskController::class, 'create'])->name('TaskManagement.create');
// Route to store task
Route::post('/store', [TaskController::class, 'store'])->name('TaskManagement.store');
// Route to show the edit form
Route::get('/task/{task}/edit', [TaskController::class, 'edit'])->name('TaskManagement.edit');

// Route to handle the task update
Route::put('/task/{task}', [TaskController::class, 'update'])->name('TaskManagement.update');
Route::delete('/task/{task}', [TaskController::class, 'destroy'])->name('TaskManagement.destroy');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/tools/content', [ToolsController::class, 'toolsContent'])->name('tools.content');

});
// Route to prevent authenticated users from accessing the login page

