<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;
use Auth;
use Input;
use File;

class UserController extends Controller {

public function getList(){
	$user=User::select('id','name', 'email', 'phonenumber', 'level','curent_money')->orderBy('id','DESC')->get()->toArray();
	return view('admin/user/list',compact('user'));

}
public function getAdd(){
	return view('admin/user/add');
	
}
public function postAdd(UserRequest $request){
	$user=new User();	

	$user->name=$request->txtUser;
	$user->password=Hash::make($request->txtPass);
	$user->email=$request->txtEmail;
	$user->level=$request->rdoLevel;
	$user->phonenumber=$request->txtPhoneNumber;
	$user->remember_token=$request->_token;
	$user->save();
	return redirect('admin/user/list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete update ']);

	
}
public function getEdit($id){

	$data =User::find($id);
	if(Auth::user()->id!=1 && ($id==1|| ($data["level"]==1 && (Auth::user()->id !=$id)))){
		return redirect('admin/user/list')->with(['flash_level'=>'danger','flash_message'=>'sorry !! you cannot access edit user']);
	}
	else
	return view('admin/user/edit',compact('data','id'));

}
public function postEdit($id, Request $request){

	$user =User::find($id);
	if($request->input('txtPass')){
		$this->validate($request,[
			'txtRePass'=>'same:txtRePass'
			],
			[
			'txtRePass.same'=> 'Two Password dont match'

			]);
		$pass=$request->input('txtPass');
		$user->password=Hash::make($pass);

	}
	$user->email=$request->txtEmail;
	$user->level=$request->rdoLevel;
	$user->phonenumber=$request->txtPhoneNumber;
	$user->remember_token=$request->input('_token');
	$user->save();
	return redirect('admin/user/list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete update user']);

	
}
public function getDelete($id){

	$user_current_login=Auth::user()->id;
	$user=User::find($id);
	if($id==1 ||$user_current_login!=1 && $user["level"]==1){
	return redirect('admin/user/list')->with(['flash_level'=>'danger','flash_message'=>'sorry!! you can not delete']);
	}
	else{
		$user->delete($id);
		return redirect('admin/user/list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! delete complete']);


	}
	
	
}

}
