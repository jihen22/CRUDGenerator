<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Menus\CrudTablesController;
use App\Http\Controllers\tablefilesController;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

<<<<<<< HEAD


//Menus routes
=======
// Menus routes
>>>>>>> 306231112456bc8a55ec95e18190491846c6620a
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

>>>>>>> 306231112456bc8a55ec95e18190491846c6620a
Route::post('/generate-crud', [tablefilesController::class, 'generateFiles'])->name('generate-crud');

Route::get('/password', function () {
    return view('admin.changepassword');
})->middleware('auth')->name('admin.changepassword');

Route::get('/home', [HomeController::class, 'index'])->name('home');


<<<<<<< HEAD
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
=======
>>>>>>> 306231112456bc8a55ec95e18190491846c6620a

Route::get('/settings', [SettingsController::class, 'settings'])->name('admin.settings');


Route::post('/myprofil', [ProfileController::class, 'updateName'])->name('admin.editmyprofil');

Route::get('/myprofil', [ProfileController::class, 'editmyprofil'])->name('admin.editmyprofil');

Route::middleware('auth')->group(function () {
    Route::get('/password', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'password'])
        ->name('admin.changepassword');

    Route::post('/password', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'changePassword'])
<<<<<<< HEAD
    ->name('admin.changepassword')
    ->middleware('auth');



    Route::post('/myprofil', [ProfileController::class, 'updateName'])->name('admin.editmyprofil');

    Route::get('/myprofil', [ProfileController::class, 'editmyprofil'])->name('admin.editmyprofil');


   //Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'create1'])->name('auth.register');


   Route::get('/myproject', [MyprojectController::class, 'index'])->name('admin.myproject');


   Route::post('/settings', [SettingsController::class, 'update'])->name('admin.settings');





=======
        ->name('admin.changepassword');
});
>>>>>>> 306231112456bc8a55ec95e18190491846c6620a

Auth::routes();
