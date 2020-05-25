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

Route::get('/', 'GameController@index');

Route::get('/parties', function() { 
    return Redirect::to('/', 301); 
});

// STATIQUES
Route::get('/contact', 'ContactController@index');
Route::post('/send', 'ContactController@send');
Route::get('/mentions-legales', 'ContactController@legal');
Route::get('/sitemap.xml', 'SitemapController@index');
Route::get('/politique-confidentialite', 'ContactController@confidentialite');

Route::get('/releases', 'SpotifyController@releases')->name('releases');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Auth::routes();

Route::get('/user', 'UserController@user');


//dd(Auth::user(), Auth::Guest());

Route::group(['middleware' => ['auth']], function () {

	Route::get('/faire-un-don', 'DonateController@index');
	Route::post('/donate', 'DonateController@store');
	Route::get('/thankyou', 'DonateController@thankyou');

	Route::get('/profile', 'ProfileController@index')->name('profile');
	Route::get('/profile/delete', 'ProfileController@destroy')->name('profile.delete');
	Route::get('/profile/stats/games', 'ProfileController@gameStats');
	Route::post('/profile/update', 'ProfileController@update')->name('profile.update');

	Route::get('/games/me', 'GameController@me')->name('games.me');

	Route::get('/games/{game}/multiplayer', 'GameController@multiplayer')->name('games.multiplayer');
	Route::post('/games/{game}/score', 'GameController@storeScore')->name('games.store.score');
	//Route::get('/home', 'HomeController@index')->name('home');

	Route::post('/games/{game}/create/ticket', 'ModeratorTicketController@store');

	Route::patch('/tracks/{track}', 'TrackController@update');


	Route::get('/stream', 'StreamController@index');
	Route::post('/stream', 'StreamController@track');

	Route::resource('/lab', 'LabController');
	Route::get('/lab/{lab}/vote', 'LabController@vote');

	// CUSTOM GAMES
	Route::post('/partie/privee/{game}/fetch', 'CustomGameController@fetch')->name('games.custom.fetch');
	Route::get('/partie/privee/{game}/start', 'CustomGameController@start')->name('games.custom.start');
	Route::get('/partie/privee/play/{track}', 'CustomGameController@play')->name('games.custom.play');
	Route::get('/partie/privee/pause/{track}', 'CustomGameController@pause')->name('games.custom.pause');
	Route::get('/partie/privee/resume/{track}', 'CustomGameController@resume')->name('games.custom.resume');
	Route::get('/partie/privee/{game}/stop', 'CustomGameController@stop')->name('games.custom.stop');
	Route::post('/partie/privee/{game}/password', 'CustomGameController@password')->name('games.custom.password');

});

Route::resource('/events', 'EventController');


Route::get('/games/{game}/private', 'GameController@private')->name('games.private');
Route::get('/games/{game}/tracks/search', 'TrackController@search');
Route::post('/games/{game}/random/track', 'GameController@track');
Route::post('/games/{game}/send/score', 'GameController@sendScore')->name('games.send.score');
Route::get('/games/{game}/podium', 'GameController@podium');
Route::get('/games/{game}/tracks/delete', 'GameController@deleteTracks');

Route::get('/parties/{slug}', 'GameController@slug');
Route::get('/parties/{slug}/test', 'GameController@test');
Route::resource('/games', 'GameController');


// CUSTOM GAMES
Route::get('/partie/privee/{game}', 'CustomGameController@index')->name('games.custom.index');
Route::post('/partie/privee/{game}', 'CustomGameController@index')->name('games.custom.password.check');



// GUEST AUTH FOR BROADCASTING
Route::post('/broadcasting/auth', function() {

	if (Auth::guest()) {

        if (Session::get('guest_id')) {

        	$guest = [
		    	'id' => Session::get('guest_id'),
		    	'name' => Session::get('guest_name')
	    	];

        } else {

        	$guest = [
		    	'id' => (int) str_replace('.', '', microtime(true)),
		    	'name' => 'anon_' . random_int(100, 999)
	    	];

            Session::put('guest_id', $guest['id']);
            Session::put('guest_name', $guest['name']);
        }

	    $user = new Illuminate\Auth\GenericUser($guest);

	    request()->setUserResolver(function () use ($user) {
	        return $user;
	    });

	}

    return Broadcast::auth(request());

});

// MESSAGES - CHAT
Route::post('/messages', 'Api\MessagesController@index');
Route::post('/messages/send', 'Api\MessagesController@store');
Route::post('/messages/vote', 'Api\MessagesController@vote');


Route::get('/profils/{name}', 'UserController@show');

Route::resource('/games/{game}/tracks', 'TrackController');

Route::post('/tracks/{track}/rate/up', 'TrackController@rateUp');
Route::post('/tracks/{track}/rate/down', 'TrackController@rateDown');


// MODERATORS
Route::group(['namespace' => 'Moderator', 'prefix' => 'moderator', 'as' => 'moderator.', 'middleware' => 'moderator'], function () {

	Route::get('/', 'DashboardController@index');
	Route::get('/user/{user}/block', 'UserController@block');
	Route::get('/tickets', 'TicketController@index');
	Route::get('/tickets/{ticket}/close', 'TicketController@close');

});


// ADMINS
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function() {

	Route::get('/', 'DashboardController@index')->name('dashboard.index');
	Route::post('/', 'DashboardController@index')->name('post.dashboard.index');

	Route::get('users/table', 'UserController@table')->name('users.table');

	Route::get('/users/search', 'UserController@search')->name('users.search');
	Route::post('/users/{user}/role', 'UserController@attach')->name('users.role.attach');
	Route::delete('/users/{user}/game/{game}/role', 'UserController@detach')->name('users.role.detach');
	Route::resource('users', 'UserController');

	Route::get('tracks/duplicates', 'TrackController@duplicates')->name('tracks.duplicates');
	Route::get('tracks/list', 'TrackController@list')->name('tracks.list');
	Route::resource('tracks', 'TrackController');

	Route::resource('games', 'GameController');

});