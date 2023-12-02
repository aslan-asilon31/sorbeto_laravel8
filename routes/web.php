<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Visitor\VisitorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatusMasterController;
use App\Http\Controllers\RolesMasterController;
use App\Http\Controllers\IceCreamController;
use App\Http\Controllers\TeamSalesController;



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


// Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('charts');
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/userslist', [UserController::class, 'getdata'])->name('user.list');
    Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/user/historylog/{user}', [UserController::class, 'historylog'])->name('user.historylog');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::put('/user/update/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/delete/{user}', [UserController::class, 'destroy'])->name('user.delete');
    // Route::put('/user/update/{user}', [UserController::class, 'update'])->name('user.update');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

    
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/statusmaster', [StatusMasterController::class, 'index'])->name('statusmaster.index');
Route::get('/rolesmaster', [RolesMasterController::class, 'index'])->name('rolesmaster.index');
Route::get('/icecream', [IceCreamController::class, 'index'])->name('icecream.index');
Route::get('/teamsales', [TeamSalesController::class, 'index'])->name('teamsales.index');
