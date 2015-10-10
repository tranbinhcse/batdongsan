@extends('admin.master')
@section('content')
@section('controller','Property')
@section('action','list')
@section('title', 'Danh sách - Tin BDS')
<div class="wrapper">
    <a href="{!! URL::route('admin.property.getAdd') !!}" class="btn btn-primary pull-right">Thêm tin BDS</a>
</div>

<div class="row">
            <div class="col-md-12">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Danh sách tin</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                    
              <!-- Table Page -->
              <div class="page-tables">
                <!-- Table -->
                <div class="table-responsive">
                  <table id="property_list" cellpadding="0" cellspacing="0" border="0" id="data-table-1" width="100%">
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
                  <div class="clearfix"></div>
                </div>
                </div>
              </div>

          
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
       // "fnInitComplete": function() {
       //      $(".dataTables_wrapper").find("select,input").addClass("form-control");
       //      $(".dataTables_wrapper").find(".dataTables_length").addClass("form-group");
       //  },
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
     
 });



</script>
@endpush

@endsection           