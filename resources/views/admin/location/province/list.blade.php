@extends('admin.master')
@section('content')
@section('controller','Localtion')
@section('action','list')
@section('title', 'Danh sách - Tỉnh thành')


<div class="wrapper">
    <a href="{!! URL::route('admin.location.getProvinceAdd') !!}" class="btn btn-primary pull-right">Thêm tỉnh</a>
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
                  <table id="provincelist" cellpadding="0" cellspacing="0" border="0" id="data-table-1" width="100%">
                    <thead>
                      <tr>
                        <th width="5%">ID</th>
                        <th width="40%">Tên</th> 
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
    $('#provincelist').DataTable({
        processing: false,
        serverSide: true,
 
        ajax: '{!! route('admin.location.getProvinceListData') !!}',
        columns: [
            { data: 'id', name: 'id',"orderable": false, "searchable": false},
            { data: 'name', name: 'name' },   
            { data: 'action', name: 'action',"orderable": false, "searchable": false },
           
        ],
        "language": {
            "lengthMenu": "Hiển thị _MENU_ dòng trên trang",
            "zeroRecords": "Nothing found - sorry",
            "info": "Hiển thị từ _START_ đến _END_ của trang _PAGE_ / _PAGES_ trang",
            "infoEmpty": "No records available",
            "infoFiltered": "(Kết quả tìm kiếm từ _MAX_ tỉnh/thành phố)"
        }
    });
 
 });

</script>
@endpush


@endsection           