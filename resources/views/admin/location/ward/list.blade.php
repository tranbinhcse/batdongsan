@extends('admin.master')
@section('content')
@section('controller','Location')
@section('action','list')
@section('title', 'Danh sách - Xã/Phường/Thị Trấn')
 <!-- datatables plugin -->
<div class="wrapper wrapper-white">
   
    <div class="">
        <table id="wardlist" class="table table-bordered table-striped table-sortable">
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
    </div>
</div>    

@push('scripts')
<script type="text/javascript">

$(function() { 
    $('#wardlist').DataTable({
        processing: false,
        serverSide: true,
        "fnInitComplete": function() {
                    $(".dataTables_wrapper").find("select,input").addClass("form-control");
                },

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
            "zeroRecords": "Nothing found - sorry",
            "info": "Hiển thị từ _START_ đến _END_ của trang _PAGE_ / _PAGES_ trang",
            "infoEmpty": "No records available",
            "infoFiltered": "(Kết quả tìm kiếm từ _MAX_ Xã/phường/thị trấn)"
        }
    });
     /* update page content on search */
    $("#wardlist").on( 'search.dt', function() {
        setTimeout(function(){
            dev_layout_alpha_content.init(dev_layout_alpha_settings);
        },200);                
    });
    /* ./update page content on search */
    
    /* uppdate page content on change length */
    $('#wardlist').on('length.dt', function() {
        setTimeout(function(){
            dev_layout_alpha_content.init(dev_layout_alpha_settings);
        },100);                
    });
    /* ./uppdate page content on change length */
 }); 
</script>
@endpush

       
<!-- ./datatables plugin -->
@endsection     

