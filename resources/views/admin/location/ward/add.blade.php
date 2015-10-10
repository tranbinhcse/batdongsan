@extends('admin.master')
@section('content')
@section('controller','District')
@section('action','Add')
@section('title', 'Thêm - Quận Huyện')
<!-- /.col-lg-12 -->
 @include("admin.blocks.error")
<form id="dangtin" role="form" method="POST" action="">

 <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
<div class="wrapper">
    <div class="row">
        <div class="col-md-6">                        
            <div class="form-group">
                <label>Tỉnh thành</label>
                <select name="selectProvince" id="wProvince" class="form-control selectpicker" required min="01" data-live-search="true" title="Vui lòng chọn một tỉnh"> 
                    <option value="0">--Chọn tỉnh thành--</option>
                    @foreach ($province as $item)
                            <option value="{!! $item['id'] !!}">{!! $item['name'] !!}</option>
                    @endforeach
                </select>
            </div>                        
        </div>
        <div class="col-md-6">                        
            <div class="form-group" id="wDistrict">
                <label>Quận Huyện</label>
                <select name="selectDistrict"  class="form-control selectpicker" required min="01" data-live-search="true" title="Vui lòng chọn một tỉnh"> 
                    <option value="0">--Chọn quận huyện--</option>
                </select>
            </div>                        
        </div>
    </div>
   <div class="row">

        <div class="col-md-2">                        
            <div class="form-group">
                <label>ID</label>                                
                <input type="text" name="txtId" class="form-control" required value="" />
            </div>                        
        </div>

        <div class="col-md-4">                        
            <div class="form-group">
                <label>Tên Quận/Huyện</label>                                
                <input type="text" name="txtName" class="form-control" required  value="" />
            </div>                        
        </div>
        <div class="col-md-3">                        
            <div class="form-group">
                <label>Loại</label>                                
                <input type="text" name="txtType" class="form-control"  value="" />
            </div>                        
        </div>
        <div class="col-md-3">                        
            <div class="form-group">
                <label>Vị trí</label>                                
                <input type="text" name="txtLocation" class="form-control"  value="" />
            </div>                        
        </div> 
    </div>

</div>
 
<div class="wrapper">
    <div class="pull-right margin-top-10">
        <button class="btn btn-warning hide-prompts" type="reset">Hide prompts</button>
        <button class="btn btn-danger" type="submit">Submit</button>
    </div>
</div>


</form>

@push('scripts')
 <script  type="text/javascript">
$(document).ready(function(){
    $('#wProvince').on('change',function () { 
        var url = '{!! route('admin.location.getDistrictByProvince') !!}/'; 
        var e = document.getElementById("wProvince");
        var idProvince = e.options[e.selectedIndex].value;
         
        $.ajax({
            url: url + idProvince,
            type: "GET", 
            cache: false,
            data: {"province_id":idProvince},
            success: function (data){
               var html = '<label>Quận Huyện</label><select name="selectDistrict" id="wDistrict" class="form-control selectpicker" required min="01" data-live-search="true" title="Vui lòng chọn một tỉnh"><option value="0">--Chọn quận huyện--</option>';
               for(var i=0; i<data.length; i++) {
                    html += '<option value="' + data[i].id + '">' + data[i].type +' '+ data[i].name + '</option>';
                }
                html +='</select>';
                $('#wDistrict').html(html);
                $('.selectpicker').selectpicker();
            }
        });
    });
});
 </script>
@endpush


@endsection           