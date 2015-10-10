@extends('admin.master')
@section('content')
@section('controller','Project')
@section('action','list')
@section('title', 'Danh sách - Dự án bất động sản')
 <!-- datatables plugin -->
<div class="wrapper wrapper-white">
   
    <div class="table-responsive">
        <table id="listcatebds" class="table table-bordered table-striped table-sortable">
            <thead>
                <tr> 
                    <th width="5%">ID</th>
                    <th width="40%">Tên dự án BDS</th>
                    <th width="20%">Khu vực</th>
                    <th width="20%">Loại dự án</th>  
                    <th width="15%">Action</th>
                </tr>
            </thead>                               
            <tbody>
            @foreach($project as $itemproject)
                <tr>
                    <td>{!!$itemproject['id']!!}</td>
                    <td>{!!$itemproject['name']!!}</td> 
                    <td>{!!$itemproject['city']!!}</td> 
                    <td>{!!$itemproject['category']!!}</td> 
                    <td>
                        <a href="{!!URL::route('admin.project.getEdit',$itemproject['id'])!!}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                        <a href="{!!URL::route('admin.project.getDelete',$itemproject['id'])!!}" onclick="return xacnhanxoa('Chắc muốn xóa không?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></i></a> 
                    </td>
                </tr>  
            @endforeach                                                
            </tbody>
        </table>
    </div>
</div>                        
<!-- ./datatables plugin -->

 

@endsection           