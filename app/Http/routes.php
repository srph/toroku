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

Route::get('/', ['as' => 'home', 'uses' => function () {
    return view('index');
}]);

Route::post('/', ['as' => 'register', 'uses' => function(App\Http\Requests\RegistrationRequest $request) {
	$inputs = $request->only([
		'email',
		'username',
		'password'
	]);

	$user = new App\User();
	$user->email = $inputs['email'];
	$user->username = $inputs['username'];
	$user->password = $inputs['password'];
	$user->save();

	return view('success')->with('message',
		'Your account has been successfully registered!');
}]);