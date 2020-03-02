CREATE CONTROLLER
A simple way to create a controller

Step 1: Open project by Command Window then run this:
	php artisan make:controller MyController

	Where: MyController is name of the Controller

Step 2: Use controller
	create a route as below code

	Route::get('routeName','MyController@testAction');

	Where:
		MyController is the controller users want to call
		testAction is the method/action users want to use