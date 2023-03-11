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

<<<<<<< HEAD
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
=======
Route::get('/Interfaces/Tables',[InterfacesController::class,'Tables'])->name('Intefaces.Tables');
Route::get('/Interfaces/smth',[InterfacesController::class,'smth'])->name('Intefaces.smth');
Route::get('/Interfaces/smth2',[InterfacesController::class,'smth2'])->name('Intefaces.smth2');

>>>>>>> 0b13b1b0f931f3b0bdaab29dc07688d8b9309888



//Menus routes
Route::get('/CRUD', function () {
    return view('Menus.Create.CRUD');
});
Route::get('/nonCrud', function () {
    return view('Menus.Create.NonCRUD');
});






<<<<<<< HEAD
Route::get('/myprofil', function () {
    return view('admin.editmyprofil');
});


=======


Route::get('/tableinput', function () {
    return view('Test.tableinput');
});
>>>>>>> 0b13b1b0f931f3b0bdaab29dc07688d8b9309888
Route::post('/generate-crud', [tablefilesController::class, 'generateFiles'])->name('generate-crud');
//Route::post('/SaveFields', [tablefilesController::class, 'SaveFields'])->name('SaveFields');



  


Route::get('/password', function () {
    return view('admin.changepassword');
});





Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/d', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/settings', [SettingsController::class, 'settings'])->name('admin.settings');

Route::get('/myproject', [MyprojectController::class, 'myproject'])->name('admin.myproject');



Route::get('/password', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'password'])
    ->name('admin.changepassword')
    ->middleware('auth');

    Route::post('/password', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'changePassword'])
    ->name('admin.changepassword')
    ->middleware('auth');



    Route::post('/myprofil', [ProfileController::class, 'updateName'])->name('admin.editmyprofil');

    Route::get('/myprofil', [ProfileController::class, 'editmyprofil'])->name('admin.editmyprofil');



