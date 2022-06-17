<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\HomeController;
use App\Http\Controllers\Page\CompanyController;
use App\Http\Controllers\Page\EmployeeController;
use App\Http\Controllers\System\ActivityController;

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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::group(['prefix' => 'company', 'middleware' => ['auth']], function () {
    route::get('index',
        [CompanyController::class, 'index']
    )->name('company.index');

    Route::get('add', 
        [CompanyController::class, 'create']
    )->name('company.add');

    Route::get('edit/{data}', 
        [CompanyController::class, 'edit']
    )->name('company.edit');

    Route::post('update/{data}', 
        [CompanyController::class, 'update']
    )->name('company.update');

    Route::get('delete/{data}', 
        [CompanyController::class, 'destroy']
    )->name('company.delete');

    Route::post('store', 
        [CompanyController::class, 'store']
    )->name('company.store');
});

Route::group(['prefix' => 'employee', 'middleware' => ['auth']], function () {
    route::get('index',
        [EmployeeController::class, 'index']
    )->name('employee.index');

    Route::get('add', 
        [EmployeeController::class, 'create']
    )->name('employee.add');

    Route::get('edit/{data}', 
        [EmployeeController::class, 'edit']
    )->name('employee.edit');

    Route::post('update/{data}', 
        [EmployeeController::class, 'update']
    )->name('employee.update');

    Route::get('delete/{data}', 
        [EmployeeController::class, 'destroy']
    )->name('employee.delete');

    Route::post('store', 
        [EmployeeController::class, 'store']
    )->name('employee.store');
});

Route::group(['prefix' => 'system', 'middleware' => ['auth']], function () {
    route::get('activity', [ActivityController::class, 'index'])->name('activity.index');
});