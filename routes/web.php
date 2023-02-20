<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterfacesController;

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

Route::get('/',function(){
    return view('welcome');
});
Route::get('/Interfaces/loging',[InterfacesController::class,'loging'])->name('Interfaces.loging');
Route::get('/interfaces/configurationpage', [\App\Http\Controllers\InterfacesController::class, 'ConfigurationPage'])->name('configurationpage');

Route::get('/Interfaces/Tables',[InterfacesController::class,'Tables'])->name('Intefaces.Tables');
Route::get('/Interfaces/smth',[InterfacesController::class,'smth'])->name('Intefaces.smth');
Route::get('/Interfaces/smth2',[InterfacesController::class,'smth2'])->name('Intefaces.smth2');

Route::get('/d', function () {
    return view('admin.dashboard');
});

Route::get('/settings', function () {
    return view('admin.settings');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/myproject', function () {
    return view('admin.myproject');
});

