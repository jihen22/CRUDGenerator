<?php
namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Menus\CrudTablesController;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;





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



Route::get('/settings', function () {
    return view('admin.settings');
});
//Menus routes
Route::get('/CRUD', function () {
    return view('Menus.Create.CRUD');
});
Route::get('/nonCrud', function () {
    return view('Menus.Create.NonCRUD');
});




Route::get('/myproject', function () {
    return view('admin.myproject');
});


Route::get('/myprofil', function () {
    return view('admin.editmyprofil');
});
Route::get('/tableinput', function () {
    return view('Test.tableinput');
});
Route::post('/generate-crud', [tablefilesController::class, 'generateFiles'])->name('generate-crud');


  


Route::get('/password', function () {
    return view('admin.changepassword');
});



Route::get('/merrry', function () {
    return view('admin.merry');
});




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/d', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

