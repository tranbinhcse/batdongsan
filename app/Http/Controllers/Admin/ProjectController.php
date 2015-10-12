<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Project;
use App\ProjectImages;
use DB;
use Input;
use File;
use Request;
use Auth;
use Validator; 
use App\User;
use App\Province;
use App\District;
use App\Ward;

class ProjectController extends Controller {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getList(){

			$project=Project::select('id','name', 'city', 'category')->orderBy('id','DESC')->get()->toArray();
			return view('admin/project/list',compact('project'));
 

	}
	public function getAdd(){
		$province = Province::select('id','name','type')->get()->toArray();
		return view('admin/project/add',compact('province'));
	}
	public function postAdd(ProjectRequest $request){
			$project = new Project();	
			$str = PhatSinhRandomKey();
			$file_name = substr(changeTitle($request->txtName),0,150) .'-iFly-main-'.$str .Request::file('fImage')->getClientOriginalName();
			
			$project->name 				=$request->txtName;
			$project->alias 			=changeTitle($request->txtName);
			$project->dientich 			=$request->txtDientich;
			$project->city 				=$request->selectProvince;
			$project->district 			=$request->selectDistrict;
			$project->ward 				=$request->selectWard;
			$project->address 			=$request->txtAddress;
			$project->mattien 			=$request->txtMattien;
			$project->dtruocnha 		=$request->txtDtruocnha;
			$project->stang 			=$request->txtStang;
			$project->sphong 			=$request->txtSphong;
			$project->toilet 			=$request->txtToilet;
			$project->huong 			=$request->txtHuong;
			$project->description 		=$request->txtDescription;
			$project->metakey 			=$request->txtMetakey;
			$project->image 			=$file_name;
			$project->tags 				=$request->txtTags;
			$project->remember_token 	=$request->_token;
			$project->save();

			$project_id = $project->id;
			$destinationPath = 'uploads/project/'.$project_id;
			$request->file('fImage')->move($destinationPath,$file_name);

			//Immage Detail
			if (Input::hasFile('fImageDetail')) {
				
				$files = Input::file('fImageDetail');
				 
				foreach ($files as $file) {
				    
			        $filename = substr(changeTitle($request->txtName),0,150) .'-iFly-detail-'.$str .$file->getClientOriginalName();

			        $project_images = new ProjectImages();
			        if (isset($file)) {
			        	$project_images->image = $filename;
			        	$project_images->project_id = $project_id;
			        	$file->move($destinationPath, $filename);
			        }
			        $project_images->save();
				}
				
			} 
			//.Immage Detail
			return redirect('admin/project/list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete update ']);
	}
	public function getEdit($id){
		$data =Project::find($id);
		$data_img = Project::find($id)->pimages;
		$province = Province::select('id','name','type')->get()->toArray();

		$jData = DB::table('project')->leftJoin('province','project.city','=','province.id')->leftJoin('district','project.district','=','district.id')->leftJoin('ward','project.ward','=','ward.id')->select('project.id as id', 'province.id as province_id','province.name as province_name','province.type as province_type', 'district.id as district_id', 'district.name as district_name', 'district.type as district_type','ward.id as ward_id', 'ward.name as ward_name','ward.type as ward_type')->where('project.id','=',$id)->first();

		if(Auth::user()->id!=1 && ($id==1|| ($data["level"]==1 && (Auth::user()->id !=$id)))){
			return redirect('admin/project/list')->with(['flash_level'=>'danger','flash_message'=>'sorry !! you cannot access edit user']);
		}
		else{
			return view('admin/project/edit',compact('data','id','data_img','province','jData'));
		}
	} 

	public function postEdit(ProjectRequest $request,$id){
		$project =Project::find($id);
		$str = PhatSinhRandomKey();
		$project->name 				=$request->txtName;
		$project->alias 			=changeTitle($request->txtName);
		$project->dientich 			=$request->txtDientich;
		$project->city 				=$request->selectProvince;
		$project->district 			=$request->selectDistrict;
		$project->ward 				=$request->selectWard;
		$project->address 			=$request->txtAddress;
		$project->mattien 			=$request->txtMattien;
		$project->dtruocnha 		=$request->txtDtruocnha;
		$project->stang 			=$request->txtStang;
		$project->sphong 			=$request->txtSphong;
		$project->toilet 			=$request->txtToilet;
		$project->huong 			=$request->txtHuong;
		$project->description 		=$request->txtDescription;
		$project->metakey 			=$request->txtMetakey;
		$project->tags 				=$request->txtTags;
		$project->remember_token 	=$request->_token;

		$img_current = 'uploads/project/'.$project->id.'/'.$request->img_current;
	 	if (!empty( Request::file('fImage'))) {
	 		$str = PhatSinhRandomKey();
	 		$imageName = substr(changeTitle($request->txtName),0,150) .'-'. $project->id. '-iFly-'.$str .Request::file('fImage')->getClientOriginalName();
	 		$project->image = $imageName;
	 		Request::file('fImage')->move('uploads/project/'.$project->id,$imageName);
	 		if (File::exists($img_current)) {
	 			File::delete($img_current);
	 		}
	 	} 
		$project->save(); 



		$project_id = $project->id;
		$destinationPath = 'uploads/project/'.$project_id;


		//Immage Detail
			if (Input::hasFile('fImageDetail')) {
				
				$files = Input::file('fImageDetail');
				 
				foreach ($files as $file) {
				    
			        $filename = substr(changeTitle($request->txtName),0,150) .'-iFly-detail-'.$str .$file->getClientOriginalName();

			        $project_images = new ProjectImages();
			        if (isset($file)) {
			        	$project_images->image = $filename;
			        	$project_images->project_id = $project_id;
			        	$file->move($destinationPath, $filename);
			        }
			        $project_images->save();
				}
				
			} 
			//.Immage Detail


		return redirect('admin/project/list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete update user']);
		 
	}


	public function getDelete($id){
 		
 		 
		File::deleteDirectory('uploads/project/'.$id); 
	 	DB::table('project_images')->select('*')->where('project_id','=', $id)->delete();
		Project::find($id)->delete($id);


		return redirect('admin/project/list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! delete complete']);
		
		
	}

	public function getDelImg($id) {
		if (Request::ajax()) {
			$idHinh = (int)Request::get('idHinh');
			$image_detail = ProjectImages::find($idHinh);

			if (!empty($image_detail)) {
				$img = 'uploads/project/'.$image_detail->project_id.'/'.$image_detail->image;
				if (File::exists($img)) {
					File::delete($img);
				}
				$image_detail->delete();
			}
			return 'ok';
		}
	}
}
