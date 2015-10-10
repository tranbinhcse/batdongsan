<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\http\Requests\CateRequest;  
use App\Category;

class CategoryController extends Controller {

	public function getDelete($id){
		$parent = Category::where('parent_id',$id)->count();
		if($parent==0){
			$cate = Category::find($id)->delete($id);
			return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Success !! complate Delete Category']);
		}else{
			echo "<script type='text/javascript'>
			alert('không thể xóa danh mục chứa các danh mục con!!!');
			window.location='";
			echo route('admin.cate.list');
			echo "';
			</script>";
		}

	}

	public function getEdit($id){
		$data =Category::findOrFail($id)->toArray();
		$parent = Category::select('id','name','parent_id')->get()->toArray();
		return view('admin.cate.edit',compact('parent','data','id'));

	}
	public function postEdit(Request $request,$id){
		$this->validate($request,["txtCateName"=>"required"],
			["txtCateName.required"=>"Vui lòng nhập tên"]);
		$cate=Category::find($id);

		$cate->name 		= $request->txtCateName;
		$cate->alias 		= changeTitle($request->txtCateName);
		$cate->parent_id 	= $request->selectparent;
		$cate->keywords 	= $request ->txtKeywords;
		$cate->metakey 	= $request ->txtMeta;
		$cate->desciption 	= $request ->txtDescription;
		$cate->remember_token 	= $request ->_token;
		$cate -> save();
		return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete update category']);



	}

	public function getList(){
		$data =Category::select('id','name','type')->orderBy('id','DESC')->get()->toArray();
		return view('admin.cate.list',compact('data'));
	}
	public function getAdd(){
		$parent = Category::select('id','name','type')->get()->toArray();
		return view('admin.cate.add',compact('parent'));
	}
	public function postAdd(CateRequest $request ){
		$cate =new Category;
		$cate->name 		= $request->txtCateName;
		$cate->alias 		= changeTitle($request->txtCateName);
		$cate->type 	= $request->optionsType;
		$cate->keywords 	= $request ->tags;
		$cate->metakey 	= $request ->txtMeta;
		$cate->desciption 	= $request ->txtDescription;
		$cate->remember_token 	= $request ->_token;
		$cate -> save();
		return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete add category']);


	}

}
