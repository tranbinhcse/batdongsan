@extends('admin.master')
@section('content')
@section('controller','Localtion')
@section('action','list')
@section('title', 'Danh sách - Quận Huyện')
 <!-- datatables plugin -->
<div class="wrapper wrapper-white">
   
    <div class="table">
        <table id="districtlist" class="table table-bordered table-striped table-sortable">
            <thead>
                <tr> 
                    <th width="20%">ID Huyện</th>
                    <th width="25%">Tên</th> 
                    <th width="20%">Tỉnh</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>                               
            <tbody>
                                                        
            </tbody>
        </table>
    </div>
</div>                        
<!-- ./datatables plugin -->
@push('scripts')
<script type="text/javascript">

$(function() { 
    $('#districtlist').DataTable({
        serverSide: true,
        "fnInitComplete": function() {
                    $(".dataTables_wrapper").find("select,input").addClass("form-control");
                },

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
     /* update page content on search */
    $("#districtlist").on( 'search.dt', function() {
        setTimeout(function(){
            dev_layout_alpha_content.init(dev_layout_alpha_settings);
        },200);                
    });
    /* ./update page content on search */
    
    /* uppdate page content on change length */
    $('#districtlist').on('length.dt', function() {
        setTimeout(function(){
            dev_layout_alpha_content.init(dev_layout_alpha_settings);
        },100);                
    });
    /* ./uppdate page content on change length */
 });



</script>
@endpush

@endsection           