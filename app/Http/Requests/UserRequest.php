<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

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
		'txtUser'=>'required|unique:users,name',
		'txtPass'=>'required',
		'txtRePass'=>'required|same:txtPass',
		'txtEmail'=>'required|unique:users,email|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',
		'txtPhoneNumber'=>'numeric'

		];
	}
	public function messages(){
		return[
		'txtUser.required'=>'vui lòng nhập tên',
			'txtUser.unique'=> 'tên tài khoản đã tồn tại',
			'txtPass.required'=>'vui lòng nhập mật khẩu',
			'txtRePass.required'=>'xác nhận mật khẩu',
			'txtRePass.same'=>'mật khẩu xác nhận không đúng',
			'txtEmail.required'	=> 'vui lòng nhập email',
			'txtEmail.unique'=>'email đã tồn tại',
			'txtEmail.regex'=>'email không đúng định dạng',
			'txtPhoneNumber.numeric'=>'số điện thoại không đúng'
			];
	}

}
