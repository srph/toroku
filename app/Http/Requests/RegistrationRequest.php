<?php

namespace App\Http\Requests;

class RegistrationRequest extends Request
{
	public function rules()
	{
		return [
			'email' => 'required|email',
			'username' => 'required|min:3|alpha_num',
			'password' => 'required|min:5'
		];
	}

	public function authorize()
	{
		return true;
	}
}