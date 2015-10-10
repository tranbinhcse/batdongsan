<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class WardRequest extends Request {

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
		'txtName'		=>'required|unique:ward,name,'.$this->id.',id',
		'txtId'			=>'required|unique:ward,id,'.$this->id.',id',
		];
	}
	public function messages(){
		return[
			'txtName.required'=>'vui lòng nhập tên',
			'txtName.unique'=> 'Tên đã tồn tại',
			'txtId.unique'=>'ID đã tồn tại',
			'txtId.required'=>'vui lòng nhập ID',
			];
	}

}
