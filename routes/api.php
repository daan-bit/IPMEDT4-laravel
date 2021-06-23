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
    Route::post('vragen', 'VraagController@store');
    

});

Route::put('update', 'OnderzoekController@update');
Route::post('store', 'OnderzoekController@store');
Route::get('onderzoeken', 'OnderzoekController@index');
Route::get('onderzoek/{id}', 'OnderzoekController@show');

Route::get('onderzoek/{id}/vragen', 'OnderzoekController@showQuestion');

Route::get('categorien', 'CategorieController@index');

//onderzoek aanvragen voor gebruikers
Route::get('onderzoek/{code}', 'OnderzoekController@show_gebruiker');
Route::get('onderzoek/{onderzoek_id}/vragen', 'VraagController@index');

//Verwijderen van vragen
Route::put('vragen/update', 'VraagController@update');

//antwoorden bekijken
Route::get('vraag/{id}/antwoorden', 'VraagController@showAntwoorden');
Route::get('vraag/{id}', "VraagController@show");

//Save antwoorden
Route::post('antwoorden', 'AntwoordController@save');
