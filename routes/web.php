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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('charts');

Route::get('/employee', [EmployeeController::class, 'index'])->name('employees');



Route::resource('users', UserController::class);
Route::get('/userslist', [UserController::class, 'getdata'])->name('users.list');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
