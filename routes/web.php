<?php
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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('notes', 'NotesController@index');
Route::get('notes/{id}/destroy', 'NotesController@destroy')->name('notes.destroy');
// Route::group(['middleware' => ['permission:destroy_notes']], function () {
// Route::get('notes/{id}/destroy', 'NotesController@destroy')->name('notes.destroy');
// });

//Rutas de Roles y Permisos


Route::group(['middleware' => ['auth']], function () {
    // Route::resource('usuarios', 'Admin\UsuarioController');
    //Route::resource('roles', 'Admin\RoleController');
    Route::resource('permisos', 'Admin\PermissionController');
    //Route::resource('roles', 'Admin\RoleController');
    Route::get('accesos', 'Admin\AccesoController@index')->name('accesos');
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','Admin\RoleController');
    Route::resource('users','Admin\UserController');
    Route::resource('products','Admin\ProductController');
    Route::resource('institucionales','Admin\InstitucionalController');
    Route::resource('organigramas', 'Admin\OrganigramaController');
    //Route::get('organigrama', 'Admin\OrganigramaController@organigrama')->name('organigrama');
    
    
    
});

