@extends('admin.master')
@section('content')
@section('controller','Property')
@section('action','list')
@section('title', 'Danh sách - Tin BDS')


<div class="row">
            <div class="col-md-12">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Tin BDS</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content medias">
                  
          <div class="table">
            <table id="property_list" class="table">
              <thead>
              <tr>
                
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Người đăng</th>
                <th>Ngày đăng</th>
                <th>Loại</th>
                <th>Trang thái tin</th>
                <th>Control</th>
              </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>  
      
    </div>
  </div>


@push('scripts')
<script type="text/javascript">

$(function() { 
    $('#property_list').DataTable({
        serverSide: true,
       

        ajax: '{!! route('admin.property.listdata') !!}',
        columns: [
            { data: 'id', name: 'id',"orderable": false, "searchable": false},
            { data: 'name', name: 'name' }, 
            { data: 'user_name', name: 'username' },
            { data: 'created_at', name: 'created_at' },
            { data: 'type', name: 'type' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action',"orderable": false, "searchable": false },
           
        ],
        "language": {
            "lengthMenu": "Hiển thị _MENU_ dòng trên trang",
            "zeroRecords": "Nothing found - sorry",
            "info": "Hiển thị từ _START_ đến _END_ của trang _PAGE_ / _PAGES_ trang",
            "infoEmpty": "No records available",
            "infoFiltered": "(Kết quả tìm kiếm từ _MAX_ quận/huyện)"
        }
    });
     /* update page content on search */
    $("#property_list").on( 'search.dt', function() {
        setTimeout(function(){
            dev_layout_alpha_content.init(dev_layout_alpha_settings);
        },200);                
    });
    /* ./update page content on search */
    
    /* uppdate page content on change length */
    $('#property_list').on('length.dt', function() {
        setTimeout(function(){
            dev_layout_alpha_content.init(dev_layout_alpha_settings);
        },100);                
    });
    /* ./uppdate page content on change length */
 });



</script>
@endpush

@endsection           