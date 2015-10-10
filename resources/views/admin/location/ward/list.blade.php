@extends('admin.master')
@section('content')
@section('controller','Location')
@section('action','list')
@section('title', 'Danh sách - Xã/Phường/Thị Trấn')
 
<div class="wrapper">
    <a href="{!! URL::route('admin.location.getWardAdd') !!}" class="btn btn-primary pull-right">Thêm Quận</a>
</div>

<div class="row">
            <div class="col-md-12">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Danh sách tin</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>  
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                    
              <!-- Table Page -->
              <div class="page-tables">
                <!-- Table -->
                <div class="table-responsive">
                  <table id="wardlist" cellpadding="0" cellspacing="0" border="0" id="data-table-1" width="100%">
                    <thead>
                      <tr>
                        <th width="10%">ID</th>
                        <th width="25%">Xã/Phường/Thị Trấn</th> 
                        <th width="20%">Quận/Huyện</th>
                        <th width="15%">Tỉnh</th> 
                        <th width="10%">Action</th> 
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
    $('#wardlist').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('admin.location.getWardListData') !!}',
        columns: [
            { data: 'wardid', name: 'wardid',"orderable": false, "searchable": false},
            { data: 'name', name: 'ward.name' }, 
            { data: 'districtname', name: 'district.name' },
            { data: 'cityname', name: 'province.name'},
            { data: 'action', name: 'action',"orderable": false, "searchable": false },
           
        ],
        "language": {
            "lengthMenu": "Hiển thị _MENU_ dòng trên trang",
            "zeroRecords": "Không tìm thấy",
            "info": "Hiển thị từ _START_ đến _END_ của trang _PAGE_ / _PAGES_ trang",
            "infoEmpty": "Không có dữ liệu",
            "infoFiltered": "(Kết quả tìm kiếm từ _MAX_ Xã/phường/thị trấn)"
        }
    });
    
 }); 
</script>
@endpush

       
<!-- ./datatables plugin -->
@endsection     

