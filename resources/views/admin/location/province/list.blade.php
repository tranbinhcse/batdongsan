@extends('admin.master')
@section('content')
@section('controller','Localtion')
@section('action','list')
@section('title', 'Danh sách - Tỉnh thành')
 <!-- datatables plugin -->
<div class="wrapper wrapper-white">
   
    <div class="table">
        <table id="provincelist" class="table table-bordered table-striped table-sortable">
            <thead>
                <tr> 
                    <th width="5%">ID</th>
                    <th width="40%">Tên</th> 
                    <th width="15%">Action</th>
                </tr>
            </thead>     
        </table>
    </div>
</div>                        
<!-- ./datatables plugin -->

@push('scripts')
<script type="text/javascript">

$(function() { 
    $('#provincelist').DataTable({
        processing: false,
        serverSide: true,
        "fnInitComplete": function() {
                    $(".dataTables_wrapper").find("select,input").addClass("form-control");
                },

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
     /* update page content on search */
    $("#provincelist").on( 'search.dt', function() {
        setTimeout(function(){
            dev_layout_alpha_content.init(dev_layout_alpha_settings);
        },200);                
    });
    /* ./update page content on search */
    
    /* uppdate page content on change length */
    $('#provincelist').on('length.dt', function() {
        setTimeout(function(){
            dev_layout_alpha_content.init(dev_layout_alpha_settings);
        },100);                
    });
    /* ./uppdate page content on change length */
 });

</script>
@endpush


@endsection           