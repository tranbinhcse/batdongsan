<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\News;
use App\Catenews;
use App\Project;
//use App\NewsImages;
use Input;
use File;
use Request;
use Auth;
use DB;
use Validator; 
use App\User;

class NewsController extends Controller {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getList(){

		$news= DB::table('news')->leftJoin('catenews', 'news.catenews_id', '=', 'catenews.id')->select('news.id as id', 'news.name as name','catenews.name as catename')->get();
		if(Auth::guest()){
         		return view('front/news/list',compact('news'));
	    }else{
	        if(Auth::user()->level == 0){
	            return view('admin/news/list',compact('news'));
	        } elseif(Auth::user()->level == 1){
	        	return view('mods/news/list',compact('news'));
	        } else{
	        	return Redirect::route('home');
	        }
	    }
		
	}
	public function getAdd(){
		$catenews = Catenews::select('name','id','parent_id')->get()->toArray();

		$project = Project::select('name','id')->get()->toArray();

		return view('admin/news/add',compact('catenews','project'));
		
	}
	public function postAdd(NewsRequest $request){
			$news = new News();	
			$str = PhatSinhRandomKey();
			$file_name = substr(changeTitle($request->txtName),0,150) .'-iFly-main-'.$str .Request::file('fImage')->getClientOriginalName();
			
			$news->name 			=$request->txtName;
			$news->alias 			=changeTitle($request->txtName);
			$news->desciption 		=$request->txtdesciption;
			$news->catenews_id 		=$request->selectcate;
			$news->projectid 		=$request->selectproject;
			$news->metakey 			=$request->txtMetakey;
			$news->image 			=$file_name;
			$news->tags 			=$request->txtTags;
			$news->remember_token 	=$request->_token;
			$news->save();

			$news_id = $news->id;
			$destinationPath = 'uploads/news/'.$news_id;
			$request->file('fImage')->move($destinationPath,$file_name);

			// //Immage Detail
			// if (Input::hasFile('fImageDetail')) {
				
			// 	$files = Input::file('fImageDetail');
				 
			// 	foreach ($files as $file) {
				    
			//         $filename = substr(changeTitle($request->txtName),0,150) .'-iFly-detail-'.$str .$file->getClientOriginalName();

			//         $project_images = new ProjectImages();
			//         if (isset($file)) {
			//         	$project_images->image = $filename;
			//         	$project_images->project_id = $project_id;
			//         	$file->move($destinationPath, $filename);
			//         }
			//         $project_images->save();
			// 	}
				
			// } 
			// //.Immage Detail

			return redirect('admin/news/list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete update ']);
	}
	public function getEdit($id){
		$data = News::find($id);
		//$data_img = Project::find($id)->pimages;

		if(Auth::user()->id!=1 && ($id==1|| ($data["level"]==1 && (Auth::user()->id !=$id)))){
			return redirect('admin/news/list')->with(['flash_level'=>'danger','flash_message'=>'sorry !! you cannot access edit user']);
		}
		else{
			$parent = Catenews::select('name','id','parent_id')->get()->toArray();
			$project = Project::select('name','id')->get()->toArray();
			return view('admin/news/edit',compact('data','id','parent','project'));
		}

	} 

	public function postEdit(NewsRequest $request,$id){
		$news =News::find($id);
		$str = PhatSinhRandomKey();
		$news->name 			=$request->txtName;
		$news->alias 			=changeTitle($request->txtName);
		$news->catenews_id 		=$request->selectcate;
		$news->projectid 		=$request->selectproject;
		$news->desciption 		=$request->txtdesciption;
		$news->metakey 			=$request->txtMetakey;
		$news->tags 			=$request->txtTags;
		$news->remember_token 	=$request->_token;

		$img_current = 'uploads/news/'.$news->id.'/'.$request->img_current;
	 	if (!empty( Request::file('fImage'))) {
	 		$str = PhatSinhRandomKey();
	 		$imageName = substr(changeTitle($request->txtName),0,150) .'-'. $news->id. '-iFly-'.$str .Request::file('fImage')->getClientOriginalName();
	 		$news->image = $imageName;
	 		Request::file('fImage')->move('uploads/news/'.$news->id,$imageName);
	 		if (File::exists($img_current)) {
	 			File::delete($img_current);
	 		}
	 	} 
		$news->save(); 

		return redirect('admin/news/list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete update user']);
		 
	}


	public function getDelete($id){
 		$news = News::find($id);
		File::deleteDirectory('uploads/news/'.$id);
		$news->delete($id);
		return redirect('admin/news/list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! delete complete']);
	}

	// public function getDelImg($id) {
	// 	if (Request::ajax()) {
	// 		$idHinh = (int)Request::get('idHinh');
	// 		$image_detail = ProjectImages::find($idHinh);

	// 		if (!empty($image_detail)) {
	// 			$img = 'uploads/project/'.$image_detail->project_id.'/'.$image_detail->image;
	// 			if (File::exists($img)) {
	// 				File::delete($img);
	// 			}
	// 			$image_detail->delete();
	// 		}
	// 		return 'ok';
	// 	}
	// }
 

}
