<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HDepartmentController;
use App\Http\Controllers\IctController;
use App\Http\Controllers\ComputingController;




Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('HDepartment', HDepartmentController::class);
Route::resource('Ict', IctController::class);
Route::resource('Computing', ComputingController::class);

