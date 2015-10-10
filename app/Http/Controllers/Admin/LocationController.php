<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProvinceRequest;
use App\Http\Requests\DistrictRequest;
use App\Http\Requests\WardRequest;
use Auth;
use Request; 
use Validator; 
use DB;
use Datatables;
use App\Province;
use App\District;
use App\Ward; 

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /********************* GET LIST DATA *****************************/
    public function getProvinceList(){
      
         return view('admin.location.province.list');
    }

     public function getProvinceListData(){   
        $data =  Province::select('id','name','type')->orderBy('id','DESC')->get();
        return Datatables::of($data) 
            ->addColumn('action', function ($name) {
                return '<a href="province/edit/'.$name->id.'" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a><a href="province/delete/'.$name->id.'" onclick="return xacnhanxoa()" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></i></a> ';
            })
            ->editColumn('name', function ($name) {
                    return $name->type.' '.$name->name;
                })
            ->make(true);
    }


    public function getDistrictList(){
         return view('admin.location.district.list',compact('district'));
    }
    public function getDistrictListData(){   
        $data= DB::table('district')->leftJoin('province', 'district.province_id', '=', 'province.id')->select('district.id as id', 'district.name as name', 'district.type as type','province.name as cityname');
        return Datatables::of($data)
           ->addColumn('action', function ($name) {
                return '<a href="district/edit/'.$name->id.'" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a><a href="district/delete/'.$name->id.'" onclick="return xacnhanxoa()" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></i></a> ';
            })
           ->editColumn('name', function ($name) {
                    return $name->type.' '.$name->name;
                })
            ->make(true);
    }

    //Get list data Ward
    public function getWardList(){
         return view('admin.location.ward.list');
    }
    public function getWardListData(){
        return Datatables::of(DB::table('ward')->leftJoin('district','ward.district_id', '=' , 'district.id')->leftJoin('province', 'district.province_id', '=', 'province.id')->select('ward.id as wardid', 'ward.name as name','ward.type as type','district.name as districtname' ,'province.name as cityname'))
            ->addColumn('action', function ($name) {
                return '<a href="ward/edit/'.$name->wardid.'" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a><a href="ward/delete/'.$name->wardid.'" onclick="return xacnhanxoa()" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></i></a> ';
            })
            ->editColumn('name', function ($name) {
                    return $name->type.' '.$name->name;
                })
            ->make(true);
    }

    /********************* EDIT DATA *****************************/


    //Edit Province
    public function getProvinceEdit($id){
        $province = Province::find($id);
        return view('admin.location.province.edit',compact('province','id'));
    }
    public function postProvinceEdit(ProvinceRequest $request,$id){
 
        $province = Province::find($id);
        
       // $province->id       = $request->txtId;
        $province->name     = $request->txtName;
        $province->type     = $request->txtType; 
        $province->save();

        return redirect('admin/location/province')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete update Pronvince']);
    }
    public function getProvinceAdd(){
        $province = Province::select('name','id','type')->get()->toArray();
        return view('admin.location.province.add',compact('province'));
        
    }

    public function postProvinceAdd(ProvinceRequest $request){
        $province = new Province();

        $province->id       = $request->txtId;
        $province->name             = $request->txtName;
        $province->type             = $request->txtType; 
        $province->save();
        return redirect('admin/location/province')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete Add Pronvince']);
    }
    public function getProvinceDelete($id){
        $district = District::where('province_id',$id)->count();
        if($district==0){
           Province::find($id)->delete($id);
            return redirect()->route('admin.location.province.getList')->with(['flash_level'=>'success','flash_message'=>'Success !! complate Delete Pronvince']);
        }else{
            echo "<script type='text/javascript'>
            alert('không thể xóa tỉnh chứa các quận/huyện!!!');
            window.location='";
            echo route('admin.location.province.getList');
            echo "';
            </script>";
        }
    }


    //Edit District
    public function getDistrictEdit($id){
        $district = District::find($id);
        $province = Province::select('name','type','id')->get()->toArray();
        return view('admin.location.district.edit',compact('district','id','province'));
    }
     public function postDistrictEdit(DistrictRequest $request,$id){
 
        $district = District::find($id);
        
        $district->name         = $request->txtName;
        $district->type         = $request->txtType; 
        $district->location     = $request->txtLocation; 
        $district->province_id  = $request->selectProvince; 
        $district->save();

        return redirect('admin/location/district')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete update district']);
    }
    public function getDistrictAdd(){
        $province = Province::select('name','type','id')->get()->toArray();
        $district = District::select('name','id','type','province_id','location')->get()->toArray();
        return view('admin.location.district.add',compact('district','province'));
        
    }
    public function postDistrictAdd(DistrictRequest $request){
        $district = new District();
        if (!empty($request->txtId)) {
            $district->id       = $request->txtId;
        } else{
            $district->id       = '0';
        }
        $district->name             = $request->txtName;
        $district->type             = $request->txtType; 
        $district->location         = $request->txtLocation; 
        $district->province_id      = $request->selectProvince; 
        $district->save();
        return redirect('admin/location/district')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete Add district']);
    }

    public function getDistrictDelete($id){
        $ward = Ward::where('district_id',$id)->count();
        if($ward==0){
           District::find($id)->delete($id);
            return redirect()->route('admin.location.district.getList')->with(['flash_level'=>'success','flash_message'=>'Success !! complate Delete District']);
        }else{
            echo "<script type='text/javascript'>
            alert('không thể xóa tỉnh chứa các Xã/Phuờng!!');
            window.location='";
            echo route('admin.location.district.getList');
            echo "';
            </script>";
        }
    }


    //Edit Ward
    public function getWardEdit($id){
        $ward = Ward::find($id);
        $district = District::select('name','type')->get()->toArray();
        $province = Province::select('name','type','id')->get()->toArray();
       
        $data = DB::table('ward')->join('district','ward.district_id', '=' , 'district.id')->join('province', 'district.province_id', '=', 'province.id')->select('ward.id as ward_id', 'ward.name as name','ward.type as type','district.name as district_name','district.id as district_id' ,'province.name as province_name','province.id as province_id')->where('ward.id',$id)->first();

        return view('admin.location.ward.edit',compact('data', 'ward','district','province','id'));
    }
     public function postWardEdit(WardRequest $request,$id){
 
        $ward= Ward::find($id);
        
       // $province->id       = $request->txtId;
        $ward->name             = $request->txtName;
        $ward->type             = $request->txtType; 
        $ward->location         = $request->txtLocation; 
        $ward->district_id      = $request->selectDistrict; 
        $ward->save();

        return redirect('admin/location/ward')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete update district']);
    }
    public function getWardAdd(){
        $province = Province::select('name','type','id')->get()->toArray();
        $district = District::select('name','id','type','province_id','location')->get()->toArray();
        return view('admin.location.ward.add',compact('district','province'));
        
    }
    public function postWardAdd(WardRequest $request){
        $ward = new Ward();
        if (!empty($request->txtId)) {
            $ward->id       = $request->txtId;
        } else{
            $ward->id       = '0';
        }
        
        $ward->name             = $request->txtName;
        $ward->type             = $request->txtType; 
        $ward->location         = $request->txtLocation; 
        $ward->district_id       = $request->selectDistrict; 
        $ward->save();
        return redirect('admin/location/ward')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete Add Ward']);
    }

    public function getWardDelete($id){
        Ward::find($id)->delete($id);
        return redirect()->route('admin.location.ward.getList')->with(['flash_level'=>'success','flash_message'=>'Success !! complate Delete Ward']);
    
    }
 
    //Get District by Province
    public function getDistrictByProvinceId($id){
        $district = District::select('name','type','id')->where('province_id','=',$id)->orderBy('name','ASC')->get()->toArray();
        return $district; 
    }

    //Get Ward by District
    public function getWardByDistrictId($id){
        $ward = Ward::select('name','type','id')->where('district_id','=',$id)->orderBy('name','ASC')->get()->toArray();
        return $ward; 
    }

     
}
