<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::any('/search', ['as' => 'post', 'uses' => 'MainController@search']);

//Route::any('/search', ['as' => 'search', 'uses' => function() {
//		if ($query = Input::get('query',false)) {
//			$stories = Story::search($query);
//		}
//		else {
//			$stories = Story::first();
//		}
//		return view('home');
//	}]);

Route::get('/', function () {
    return view('main');
});

Route::get('/tmp', function () {
    return view('tmp');
});

Route::get('/home', function () {
    return view('home');
});

Route::any('/addData', ['as' => 'post2', 'uses' => 'MainController@addData']);


Route::get('/main',function() {
    return view('main');
});

Route::any('/getComment', ['as' => 'post', 'uses' => 'MainController@getComment']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
