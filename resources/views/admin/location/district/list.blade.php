@extends('admin.master')
@section('content')
@section('controller','Localtion')
@section('action','list')
@section('title', 'Danh sách - Quận Huyện')

<div class="wrapper">
    <a href="{!! URL::route('admin.location.getDistrictAdd') !!}" class="btn btn-primary pull-right">Thêm Quận</a>
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
                  <table id="districtlist" cellpadding="0" cellspacing="0" border="0" id="data-table-1" width="100%">
                    <thead>
                      <tr>
                        <th width="20%">ID Huyện</th>
                        <th width="25%">Tên</th> 
                        <th width="20%">Tỉnh</th>
                        <th width="15%">Action</th>
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
    $('#districtlist').DataTable({
        serverSide: true,
        ajax: '{!! route('admin.location.getDistrictListData') !!}',
        columns: [
            { data: 'id', name: 'id',"orderable": false, "searchable": false},
            { data: 'name', name: 'district.name' }, 
            { data: 'cityname', name: 'province.name' },
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