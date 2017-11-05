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

#################### ATIVIDADE 02 #####################################
Route::get('/atividade_02', 'AtividadesController@atividade_02');

// Route::get('/atividade_02', function () {
// 	return view('atividades.atividade_02');
// });
#######################################################################

#################### ATIVIDADE 03 #####################################
Route::get('/atividade_03', 'Atividade03Controller@index');

Route::get('/atividade_03/profiles', 'Atividade03Controller@profiles');

Route::get('/atividade_03/competitions', 'Atividade03Controller@competitions');

Route::get('/atividade_03/about', 'Atividade03Controller@about');

Route::get('/avividade_03/profiles/{name}', 'Atividade03Controller@show_profile');

Route::get('/atividade_03/competition/{name}', 'Atividade03Controller@show_competition');

#######################################################################