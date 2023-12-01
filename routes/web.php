<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Visitor\VisitorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;



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

//visitor
Route::get('/', [VisitorController::class, 'index'])->name('visitor');


Route::get('/employee', [EmployeeController::class, 'index'])->name('employees');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('charts');


    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/userslist', [UserController::class, 'getdata'])->name('users.list');
    Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/user/update/{user}', [UserController::class, 'update'])->name('users.update');

    // Route::get('/users/edit', [UserController::class, 'editdata'])->name('users.edit');
});

// Route::resource('users', UserController::class);
// Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
// Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
