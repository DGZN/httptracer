<?php

// Linode API Key: 7aDcokovWB9fuywFEMDJs6yDhXOdJX7BkeSCPl6wwdHQt4S0FvPa9jg2XjvEWikF

use Ninjabox\Utilities\HTTP;

Route::get('/debug', function()
{

	$HTTP = new HTTP;

	return $HTTP->Trace('http://gwlessons.cloudapp.net/api/v1/products/free/');
});

Route::get('/', function()
{
	
	// Trace == Hit + Log + Analyize

	$HTTP = new HTTP;

	return $HTTP->Trace('http://gwlessons.cloudapp.net/api/v1/products/featured/');

});


Route::get('/theme', function() {
    return File::get(public_path().'/theme/index.html');
});


Route::get('login', 'SessionsController@create');

Route::get('logout', 'SessionsController@destroy');

 	Route::resource('users','UsersController'); 	


Route::resource('sessions', 'SessionsController');

Route::get('traces/endpoint/{id}', 'TracesController@byEndpointId');

Route::resource('traces','TracesController');


Route::group(array('before' => 'auth'), function()
{
  	Route::get('/admin', function()
  	{
  		return '-- Admin --';
  	});
 	

	Route::resource('endpoints','EndpointsController');

	Route::get('endpointsgraph', 'EndpointsController@graph');

	Route::resource('endpointGroups','EndpointGroupsController');

	Route::get('lazylytics/analytics', 'LazyLyticsController@analytics');

	Route::resource('/lazylytics', 'LazyLyticsController');



});