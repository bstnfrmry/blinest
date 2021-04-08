<?php

use Illuminate\Http\Request;

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


Route::post('register', 'Api\RegisterController@register');

Route::post('/login', 'Api\AuthController@login')->name('login.api');
Route::post('/register', 'Api\AuthController@register')->name('register.api');

Route::get('/games', 'Api\GameController@index')->name('api.games.index');
Route::get('/games/search', 'Api\GameController@search')->name('api.games.search');


Route::get('/media/search', 'Api\DeezerController@search');
Route::get('/deezer/playlist', 'Api\DeezerController@addPlaylist');
Route::post('/deezer/store/playlist', 'Api\DeezerController@storePlaylist');

Route::get('/spotify/search', 'Api\SpotifyController@search');
Route::get('/spotify/playlist', 'Api\SpotifyController@addPlaylist');
Route::post('/spotify/store/playlist', 'Api\SpotifyController@storePlaylist');

Route::get('/itunes/search', 'Api\ItunesController@search');
