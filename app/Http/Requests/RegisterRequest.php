<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
		'name'=>'required|unique:users,name',
		'email'=>'required|email|unique:users,email',
		'password'=>'required|same:repassword'
		];
	}
	public function messages(){
		return [
		'name.required'=>'Please enter Name',
		'name.unique'=>'Name is exists',
		'email.required'=>'Please enter Email',
		'email.email'=>'This isn\'t Email',
		'email.unique'=>'Email is exists',
		'password.required'=>'Please enter Password',
		'password.same'     => 'Two Password Don\'t Match',
		];
	}

}
