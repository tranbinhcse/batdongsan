<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\http\Requests\CatenewsRequest;  
use App\Catenews;

class CatenewsController extends Controller
{
  public function getDelete($id){
        $parent = Catenews::where('parent_id',$id)->count();
        if($parent==0){
            $cate = Catenews::find($id)->delete($id);
            return redirect()->route('admin.news.cate.list')->with(['flash_level'=>'success','flash_message'=>'Success !! complate Delete Category']);
        }else{
            echo "<script type='text/javascript'>
            alert('không thể xóa danh mục chứa các danh mục con!!!');
            window.location='";
            echo route('admin.news.cate.list');
            echo "';
            </script>";
        }

    }

    public function getEdit($id){
        $data =Catenews::findOrFail($id)->toArray();
        $parent = Catenews::select('id','name','parent_id')->get()->toArray();
        return view('admin.news.cate.edit',compact('parent','data','id'));

    }
    public function postEdit(Request $request,$id){
        $this->validate($request,["txtCateName"=>"required"],
            ["txtCateName.required"=>"Vui lòng nhập tên"]);
        $cate=Catenews::find($id);

        $cate->name         = $request->txtCateName;
        $cate->alias        = changeTitle($request->txtCateName);
        $cate->parent_id    = $request->selectparent;
        $cate->keywords     = $request ->txtKeywords;
        $cate->metakey  = $request ->txtMeta;
        $cate->desciption   = $request ->txtDescription;
        $cate->remember_token   = $request ->_token;
        $cate -> save();
        return redirect()->route('admin.news.cate.list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete update category']);



    }

    public function getList(){
        $data =Catenews::select('id','name','parent_id')->orderBy('id','DESC')->get()->toArray();
        return view('admin.news.cate.list',compact('data'));
    }
    public function getAdd(){
        $parent = Catenews::select('id','name','parent_id')->get()->toArray();
        return view('admin.news.cate.add',compact('parent'));
    }
    public function postAdd(CatenewsRequest $request ){
        $cate =new Catenews;
        $cate->name         = $request->txtCateName;
        $cate->alias        = changeTitle($request->txtCateName);
        $cate->parent_id    = $request->selectparent;
        $cate->keywords     = $request ->txtKeywords;
        $cate->metakey  = $request ->txtMeta;
        $cate->desciption   = $request ->txtDescription;
        $cate->remember_token   = $request ->_token;
        $cate -> save();
        return redirect()->route('admin.news.cate.list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete add category']);


    }

}
