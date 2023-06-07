<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MyprojectController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Menus\CrudTablesController;
use App\Http\Controllers\tablefilesController;

use App\Http\Controllers\CrudController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\editTableController;
use App\Http\Controllers\ColonneController;

use App\Http\Controllers\Table001Controller;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ListController;


<<<<<<< HEAD
=======




>>>>>>> 89725eafb34f4e3e2741e8916a8d0d77cfe82e7b


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});



//Menus routes
Route::get('/CRUD', function () {
    return view('Menus.Create.CRUD');
});
Route::get('/CRUD', [tablefilesController::class, 'ProjectName'])->name('Menus.Create.CRUD');







Route::get('/myprofil', function () {
    return view('admin.editmyprofil');
});




Route::post('/generate-crud', [tablefilesController::class, 'generateFiles'])->name('generate-crud');

Route::get('/password', function () {
    return view('admin.changepassword');
})->middleware('auth')->name('admin.changepassword');




Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/dashboard', [DashboardController::class, 'showTableNames'])->name('admin.dashboard');
Route::get('/t/{table}', [DashboardController::class, 'telecharger'])->name('telecharger_controller');
Route::get('/d/{table}/supprimer', [DashboardController::class, 'supprimerTable'])->name('supprimer_table');




Route::get('/settings', [SettingsController::class, 'settings'])->name('admin.settings');
Route::get('/settings', [SettingsController::class, 'edit'])->name('admin.settings');




Route::post('/myprofil', [ProfileController::class, 'updateName'])->name('admin.editmyprofil');

Route::get('/myprofil', [ProfileController::class, 'editmyprofil'])->name('admin.editmyprofil');

Route::middleware('auth')->group(function () {
    Route::get('/password', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'password'])
        ->name('admin.changepassword');



    Route::post('/password', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'changePassword'])
    ->name('admin.changepassword')
    ->middleware('auth');
});



    Route::post('/myprofil', [ProfileController::class, 'updateName'])->name('admin.editmyprofil');

    Route::get('/myprofil', [ProfileController::class, 'editmyprofil'])->name('admin.editmyprofil');




   Route::get('/myproject', [MyprojectController::class, 'index'])->name('admin.myproject');


   Route::post('/settings', [SettingsController::class, 'update'])->name('admin.settings');

    // Generate authentication routes
Auth::routes();

// Login page route
Route::group(['middleware' => 'guest'] , function(){

    Route::get('/login/github', 'App\Http\Controllers\Auth\LoginController@github'); 
    Route::get('/login/github/redirect', 'App\Http\Controllers\Auth\LoginController@githubredirect'); 
   

});
// Login page route
Route::group(['middleware' => 'guest'] , function(){

    Route::get('/login/google', 'App\Http\Controllers\Auth\LoginController@google'); 
    Route::get('/login/google/redirect', 'App\Http\Controllers\Auth\LoginController@googleredirect'); 
   

});
// Login page route
Route::group(['middleware' => 'guest'] , function(){

    Route::get('/login/facebook', 'App\Http\Controllers\Auth\LoginController@facebook'); 
    Route::get('/login/facebook/redirect', 'App\Http\Controllers\Auth\LoginController@facebookredirect'); 
   

});



 




    Route::get('/table/{table}', [ColonneController::class, 'showColumns'])->name('table.columns');
    Route::delete('/table/{table}/column/{columnName}', [ColonneController::class, 'deleteColumn'])->name('column.delete');



   Route::post('/add-column', [App\Http\Controllers\editTableController::class, 'add'])->name('add-column.store');
   Route::get('/add-column', [App\Http\Controllers\editTableController::class, 'showAddColumnForm'])->name('add-column');



Route::post('/check-entities-exist', '\\App\\Http\\Controllers\\tablefilesController@checkEntitiesExist');

Route::post('/check-entitiescol-exist', '\\App\\Http\\Controllers\\editTableController@checkEntitiescolExist');

//use App\Http\Controllers\cc6Controller;

//Route::get('/table/{table}/{view}', [cc6Controller::class, 'store']);
//Route::get('/table/{table}/{view}', [cc6Controller::class, 'index']);
//Route::post('/table/{table}/{view}', [cc6Controller::class, 'store']);
//Route::delete('/data/{id}', [cc6Controller::class, 'deleteData']);
//Route::post('/update-row/{id}', [cc6Controller::class, 'updateRow'])->name('update.row');
Route::get('/card/{table}/{view}', [CardController::class,'index']);
Route::delete('/data/{id}', [CardController::class, 'deleteData']);
Route::post('/update-row/{id}', [CardController::class, 'updateRow'])->name('update.row');
Route::post('/card/{table}/{view}', [CardController::class,'store']);



Route::get('/{table}/{view}', [ListController::class, 'index']);
