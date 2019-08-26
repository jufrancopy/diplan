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

Route::group(['middleware' => ['auth']], function () {
    
    //Rutas del tipo Resource
    Route::resource('permisos', 'Admin\PermissionController');
    Route::resource('roles', 'Admin\RoleController');
    Route::resource('users', 'Admin\UserController');
    Route::resource('products', 'Admin\ProductController');
    Route::resource('organigramas', 'Admin\OrganigramaController');
    
    
    //Rutas del tipo get
    Route::get('accesos', 'Admin\AccesoController@index')->name('accesos');
    Route::view('/fodas-dashboard', 'admin.fodas.index')->name('fodas-dashboard');
    Route::get('perfil-categorias/{id}', 'Admin\FodaAnalisisController@listarCategorias')->name('perfil-categorias');
    Route::resource('fodas', 'Admin\FodaController');
    Route::resource('foda-perfiles', 'Admin\FodaPerfilController');
    Route::resource('foda-categorias', 'Admin\FodaCategoriaController');
    Route::resource('foda-aspectos', 'Admin\FodaAspectoController');
    Route::resource('foda-analisis', 'Admin\FodaAnalisisController');
    
    Route::get('foda-ponderaciones/{idAspecto}/{idPerfil}/ponderacion', 'Admin\FodaAnalisisController@ponderaciones')->name('foda-ponderaciones');
    Route::get('foda-ambiente-interno/{idPerfil}', 'Admin\FodaAnalisisController@categoriasAmbienteInterno')->name('foda-ambiente-interno');
    Route::get('foda-ambiente-externo/{idPerfil}', 'Admin\FodaAnalisisController@categoriasAmbienteExterno')->name('foda-ambiente-externo');
    Route::get('foda-aspectos-categoria/{idCategoria}/{idPerfil}', 'Admin\FodaAnalisisController@aspectosCategoria')->name('foda-aspectos-categoria');
    Route::get('foda-analisis-asignar-aspectos/{idPerfil}', 'Admin\FodaAnalisisController@asignarAspectos')->name('ffoda-analisis-asignar-aspectos');
    Route::post('foda-ponderar/{id}/ponderar', 'Admin\FodaAnalisisController@ponderar')->name('foda-ponderar');
    Route::get('foda-listado-perfiles', 'Admin\FodaAnalisisController@listadoPerfiles')->name('foda-listado-perfiles');
    Route::get('foda-listado-categorias-aspectos/{idPerfil}', 'Admin\FodaAnalisisController@listadoCategoriaAspectos')->name('foda-listado-categorias-aspectos');
    Route::get('foda-analisis-ambientes/{idPerfil}', 'Admin\FodaAnalisisController@seleccionarAmbiente')->name('foda-analisis-ambientes');
    Route::get('foda-analisis-ambiente-interno/{idPerfil}', 'Admin\FodaAnalisisController@analisisCategoriasAmbienteInterno')->name('foda-analisis-ambiente-interno');
    Route::get('foda-analisis-ambiente-externo/{idPerfil}', 'Admin\FodaAnalisisController@analisisCategoriasAmbienteExterno')->name('foda-analisis-ambiente-externo');
    Route::get('foda-analisis-aspectos/{idPerfil}', 'Admin\FodaAnalisisController@analisisAspectos')->name('foda-analisis-aspectos');
    
    
    
});
