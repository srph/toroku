<?php

namespace App\Http\Requests;

class RegistrationRequest extends Request
{
	public function rules()
	{
		return [
			'email' => 'required|email|unique:accounts',
			'username' => 'required|min:3|alpha_num|unique:accounts',
			'password' => 'required|min:5'
		];
	}

	public function authorize()
	{
		return true;
	}
}