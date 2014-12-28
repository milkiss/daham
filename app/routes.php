<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$locale = Request::segment(1);

if (in_array($locale, Config::get('app.available_locales'))) {
    App::setLocale($locale);
} else {
    $locale = null;
    App::setLocale("ko");
}

Route::group(array('prefix' => $locale), function()
{
	Route::get('/', function()
	{
		return View::make('pages.home');
	});
		
	Route::get('/service-areas', 'ServiceAreasController@view');

	Route::get('/professionalism', 'ProfController@view');
	
	Route::get('/locations', function()
	{
		return View::make('pages.locations');
	});
	
	//Route::get('/links', 'LinksController@view');
	
	Route::get('/members/{name}', 'MembersController@view')
	-> where('name', 'kyeounsoo');
});