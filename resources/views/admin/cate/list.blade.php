@extends('admin.master')
@section('controller','Category')
@section('action','List')
@section('content')
<div class="wrapper">
    <a href="{!! URL::route('admin.cate.getAdd') !!}" class="btn btn-primary pull-right">Thêm danh mục dự án</a>
</div>


<div class="row">
            <div class="col-md-12">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Danh mục BDS</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>  
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content medias">
                  
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
              <thead>
              <tr>
                <th class="text-center">ID</th>
                <th>Tên</th>
                <th>Loại</th>
                <th>Control</th>
              </tr>
              </thead>
              <tbody>

           

                <?php $stt = 0 ?>
                @foreach ($data as $item)
                <?php $stt = $stt + 1 ?>
                <tr>
                    <td class="text-center">{!! $stt !!}</td>
                    <td><a href="{!! URL::route('admin.cate.getEdit',$item['id']) !!}" title="">{!! $item["name"] !!}</a></td>
                    <td>
                        @if ($item["type"] == 1)
                            {!! "BDS Bán" !!}
                        @else
                            {!! 'BDS Cho thuê' !!}
                        @endif

                    </td>
                    <td>
                        <a href="{!! URL::route('admin.cate.getEdit',$item['id']) !!}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <a  onclick="return xacnhanxoa('Bạn Có Chắc Là Muốn Xóa Không')" href="{!! URL::route('admin.cate.getDelete',$item['id']) !!}" class="btn btn-danger btn-xs">
                        <i class="fa fa-times"></i></i></a> 
                    </td>
                </tr>
                @endforeach
             
               
                                                         

              </tbody>
            </table>
          </div>  

                </div>
              </div>  
              
            </div>
          </div>


@endsection
