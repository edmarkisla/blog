<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('admin', 'AdminController@index'); 
Route::get('user', 'UserController@index');
Route::get('/auth/addblog', 'UserController@create'); 


//Authentication Routes for google provider
Route::get('auth/google', 'Auth\AuthController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\AuthController@handleProviderCallback');

/*Route::get('admin', ['middleware' => 'admin', function(){
	echo 'Welcome to your admin page';
}]);*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



/*Route::get( 'login', array('as' => 'login', 'uses' => 'user@login'));
Route::group(array('before' => 'auth'), function()
{
   Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'user@dashboard'));
});*/
