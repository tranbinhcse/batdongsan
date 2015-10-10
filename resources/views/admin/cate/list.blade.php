@extends('admin.master')
@section('controller','Category')
@section('action','List')
@section('content')
<div class="wrapper">
    <a href="{!! URL::route('admin.cate.getAdd') !!}" class="btn btn-primary pull-right">Thêm danh mục dự án</a>
</div>
<!-- datatables plugin -->
<div class="wrapper wrapper-white">
   
    <div class="table-responsive">
        <table id="listcatebds" class="table table-bordered table-striped table-sortable">
            <thead>
                <tr> 
                    <th>ID</th>
                    <th>Tên Loại tin</th>
                    <th>Danh mục cha</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>                               
            <tbody>
               
                <?php $stt = 0 ?>
                @foreach ($data as $item)
                <?php $stt = $stt + 1 ?>
                <tr>
                    <td>{!! $stt !!}</td>
                    <td>{!! $item["name"] !!}</td>
                    <td>
                        @if ($item["parent_id"] == 0)
                            {!! "None" !!}
                        @else
                            <?php 
                                $parent = DB::table('categories')->where('id',$item["parent_id"])->first();
                                echo $parent->name;
                            ?>
                        @endif

                    </td>
                    <td>
                        <a href="{!! URL::route('admin.cate.getEdit',$item['id']) !!}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                        <a  onclick="return xacnhanxoa('Bạn Có Chắc Là Muốn Xóa Không')" href="{!! URL::route('admin.cate.getDelete',$item['id']) !!}" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></i></a> 
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
    
</div>                        
<!-- ./datatables plugin -->

@endsection
