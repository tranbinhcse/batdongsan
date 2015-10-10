@extends('admin.master')
@section('content')
@section('controller','News')
@section('action','list')
@section('title', 'Danh sách - Tin tức')
 <!-- datatables plugin -->
<div class="wrapper wrapper-white">
    <div class="table-responsive">
        <table id="listcatebds" class="table table-bordered table-striped table-sortable">
            <thead>
                <tr> 
                    <th width="5%">ID</th>
                    <th width="40%">Tiêu đề tin</th>
                    <th width="20%">Loại tin</th>  
                    <th width="15%">Action</th>
                </tr>
            </thead>                               
            <tbody> 
            @foreach($news as $item)
                <tr>
                    <td>{!! $item->id !!}</td>
                    <td>{!! $item->name !!}</td>  
                    <td> {!! $item->catename !!}
                    </td> 
                    <td>
                        <a href="{!!URL::route('admin.news.getEdit',$item->id)!!}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                        <a href="{!!URL::route('admin.news.getDelete',$item->id)!!}" onclick="return xacnhanxoa('Chắc muốn xóa không?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></i></a> 
                    </td>
                </tr>  
            @endforeach                                                
            </tbody>
        </table>
    </div>
</div>                        
<!-- ./datatables plugin -->

 

@endsection           