<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/


/*voor inloggen - alex*/
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('vragen/store', 'VraagController@store');
    

});

Route::put('update', 'OnderzoekController@update');
Route::post('store', 'OnderzoekController@store');
Route::get('onderzoeken', 'OnderzoekController@index');
Route::get('onderzoek/{id}', 'OnderzoekController@show');

Route::get('onderzoek/{id}/vragen', 'OnderzoekController@showQuestion');

/*Beveiligde route*/
//Route::middleware('api:auth')->post('vragen/store', 'VraagController@store');

Route::get('categorien/all', 'CategorieController@index');


//onderzoek aanvragen voor gebruikers
Route::get('/onderzoeken/{code}', 'OnderzoekController@show_gebruiker');
Route::get('/onderzoeken/{onderzoek_id}/vragen', 'VraagController@index_gebruiker');


//vragen aanvragen voor Joey
//Route::get('vragen/{​​​id}​​​', 'VraagController@show');

 
//Route::get('/onderzoeken/{code}', 'OnderzoekController@show');

//antwoorden bekijken
Route::get('vraag/{id}/antwoorden', 'VraagController@showAntwoorden');
Route::get('vraag/{id}', "VraagController@show");
