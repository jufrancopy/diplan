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
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/foda-amb-interno', 'Admin\FodaController@fodaAmbInterno')->name('foda-amb-interno');



Route::group(['middleware' => ['auth']], function () {
    //Rutas del tipo Resource
    Route::resource('permisos', 'Admin\PermissionController');
    Route::resource('roles', 'Admin\RoleController');
    Route::resource('users', 'Admin\UserController');
    Route::resource('products', 'Admin\ProductController');
    Route::resource('institucionales', 'Admin\InstitucionalController');
    Route::resource('organigramas', 'Admin\OrganigramaController');
    Route::resource('fodas', 'Admin\FodaController');
    
    //Rutas del tipo get
    Route::get('accesos', 'Admin\AccesoController@index')->name('accesos');
    Route::get('foda/analisis-fortaleza/{id}', 'Admin\FodaController@analisisFortaleza')->name('analisis.fortaleza');
    Route::get('foda/analisis-debilidad/{id}', 'Admin\FodaController@analisisDebilidad')->name('analisis.debilidad');
    Route::get('foda-search', 'Admin\FodaController@fodaSearch')->name('foda.search');
    
    
});
