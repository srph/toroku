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

Route::post('/', ['as' => 'register', 'uses' => function(
	App\Http\Requests\RegistrationRequest $request,
	Illuminate\Config\Repository $config,
	Illuminate\Mail\Mailer $mailer) {

	$inputs = $request->only([
		'email',
		'username',
		'password'
	]);

	$confirmed = $config->get('valiant.email_confirmation');

	$user = new App\User();
	$user->email = $inputs['email'];
	$user->username = $inputs['username'];
	$user->password = $inputs['password'];
	$user->accesslevel = 100;

	if ($confirmed) {
		$user->confirmation_code = str_random();
		$user->accesslevel = 0;
	}

	$user->save();

	if ($confirmed) {
		$data = [
			'username' => $user->username,
			'code' => $user->confirmation_code
		];

		$mail->send('emails.welcome', $data, function($message) use($user) {
			$message->to($user->email);
			$message->subject('Email Verification');
		});

		$message = 'You have been registered. ' .
			'But, you will need to confirm your email address first!';
	} else {
		$message = 'Your account has been successfully registered!';
	}

	return view('success')->with('message', $message);
}]);

Route::get('/{code}', ['as' => 'register.confirmation', 'uses' => function($code) {
	try {
		$user = App\User::where('confirmation_code', $code)->first();
	} catch(Illuminate\Database\Eloquent\ModelNotFoundException $e) {
		return view('confirmation_404');
	}

	$user->confirmation_code = '';
	$user->accesslevel = 100;
	$user->save();

	return view('confirmation_success');
}])