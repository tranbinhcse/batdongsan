<?php

namespace App\Http\Controllers\Admin;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;
use App\Property;
use App\Province;
use App\Category;
use App\PropertyImages;
use DB;
use Datatables;
use Input;
use File;
use Request;
use Auth;
use Validator; 



class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin/property/list');
    }

    public function ListData(){   
        $property=Property::select('id','name', 'user_id','user_name','status','created_at','type')->orderBy('id','DESC')->get();
        //$property = DB::table('property')->leftJoin('categories','property.category','=','categories.id')->select('property.id as id','property.name as name','property.user_name as username','property.status as status','property.created_at as created_at','categories.name as catename');
        return Datatables::of($property) 
            ->addColumn('action', function ($name) {
                return '<a href="property/edit/'.$name->id.'" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a><a href="delete/'.$name->id.'" onclick="return xacnhanxoa()" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></i></a> ';
            })
            ->editColumn('type',function($name){
                if ($name->type == 1) {
                    return 'BDS Bán';
                } else{
                    return 'BDS Cho thuê';
                }
            })
            ->editColumn('status', function($name){
                if ($name->status == 1) {
                    return 'Chờ duyệt';
                } elseif ($name->status == 2){
                    return 'Đang hiển thị';
                } elseif($name->status == 3){
                    return 'Đã bán';
                } else {
                    return 'Đã thuê';
                }
            })
            ->editColumn('name', function ($name) {
                    return $name->type.' '.$name->name;
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $province = Province::select('id','name','type')->get()->toArray();
        $cate = Category::select('id','name','parent_id')->get()->toArray();
        return view('admin/property/add',compact('province','cate'));
    }

    public function selectCate($type)
    {
        $cate = Category::select('id','name','parent_id')->where('type','=',$type )->get()->toArray();
        return $cate;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyRequest $request)
    {
        $property = new Property();   
        $str = PhatSinhRandomKey();
        $file_name = substr(changeTitle($request->txtName),0,200) .'-iFly-main-'.$str;
        
        $property->name              =$request->txtName;
        $property->alias             =changeTitle($request->txtName);
        $property->type              =$request->optionType;
        $property->category          =$request->selectCategory;
        $property->province_id       =$request->selectProvince;
        $property->district_id       =$request->selectDistrict;
        $property->ward_id           =$request->selectWard;
        $property->address           =$request->txtAddress;
        $property->project_id        =$request->selectProject;
        $property->price             =$request->txtPrice;
        $property->unit              =$request->selectUnit;
        $property->acreage           =$request->txtAcreage;
        $property->facades           =$request->txtFacades;
        $property->road              =$request->txtRoad;
        $property->floor             =$request->txtFloor;
        $property->room              =$request->txtRoom;
        $property->direction         =$request->selectDirection;
        $property->toilet            =$request->txtToilet;

        //$property->user_id           ='0';
        $property->user_name         =$request->txtUserName;
        $property->user_email        =$request->txtUserEmail;
        $property->user_address      =$request->txtUserAddress;
        $property->user_phone        =$request->txtUserPhone;
        $property->user_mobile       =$request->txtUserMobile;

        $property->status            =$request->selectStatus;
        $property->date_open         =$request->txtDateOpen;
        $property->date_close        =$request->txtDateClose;
        
        $property->date_vip          =$request->txtDateVip;
        $property->desciption        =$request->txtDesciption;
        $property->metakey           =$request->txtMeta;
        $property->image             =$file_name;
        $property->tags              =$request->txtTags;
        $property->remember_token    =$request->_token;
        $property->save();

        $property_id = $property->id;
        $destinationPath = 'uploads/property/'.$property_id;
        $request->file('fImage')->move($destinationPath,$file_name);

        //Immage Detail
        if (Input::hasFile('fImageDetail')) {
            
            $files = Input::file('fImageDetail');
             
            foreach ($files as $file) {
                $str = PhatSinhRandomKey();
                $filename = substr(changeTitle($request->txtName),0,200) .'-iFly-detail-'.$str;

                $property_images = new PropertyImages();
                if (isset($file)) {
                    $property_images->image = $filename;
                    $property_images->property_id = $property_id;
                    $file->move($destinationPath, $filename);
                }
                $property_images->save();
            }
            
        } 
        //.Immage Detail


        return redirect('admin/property/list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! Complete Add Property']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        File::deleteDirectory('uploads/property/'.$id); 
        DB::table('property_images')->select('*')->where('property_id','=', $id)->delete();
        Property::find($id)->delete($id);


        return redirect('admin/property/list')->with(['flash_level'=>'success','flash_message'=>'Sucssess !! delete complete']);
    }
}
