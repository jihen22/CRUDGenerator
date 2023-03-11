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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

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


Route::post('/generate-crud', [tablefilesController::class, 'generateFiles'])->name('generate-crud');
//Route::post('/SaveFields', [tablefilesController::class, 'SaveFields'])->name('SaveFields');



  


Route::get('/password', function () {
    return view('admin.changepassword');
});





Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
