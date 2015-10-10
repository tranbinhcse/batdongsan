@extends('admin.master')
@section('content')
@section('controller','Ward')
@section('action','Edit')
@section('title', 'Sửa - Xã/Phường')
<!-- /.col-lg-12 -->
<form id="dangtin" role="form" method="POST" action="">
 @include("admin.blocks.error")
 <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
<div class="wrapper">
 
    <div class="row">
        <div class="col-md-6">                        
            <div class="form-group">
                <label>Tỉnh thành</label>
                <select name="selectProvince" id="wProvince" class="form-control sselectpicker" required min="01" data-live-search="true" title="Vui lòng chọn một tỉnh"> 
                    <option value="0">--Chọn tỉnh thành--</option>
                    @foreach ($province as $itemp)
                    <?php if (isset($data) && $data->province_id == $itemp['id']) { ?>
                        <option selected="selected" value="{!! $itemp['id'] !!}">{!! $itemp['type'].' '.$itemp['name'] !!}</option>
                    <?php }else{?>
                        <option value="{!! $itemp['id'] !!}">{!!  $itemp['type'].' '.$itemp['name']  !!}</option>
                    <?php } ?>
                    
                    @endforeach
                   
                </select>
            </div>                        
        </div>
        <div class="col-md-6">                        
            <div class="form-group" id="wDistrict">
                <label>Quận Huyện</label>
                <select name="selectProvince" class="form-control selectpicker" required min="01" data-live-search="true" title="Vui lòng chọn một tỉnh"> 
                    <option value="0">--Chọn Quận/Huyện--</option>
                    
                </select>
            </div>                        
        </div>
    </div>
    <div class="row">

        <div class="col-md-2">                        
            <div class="form-group">
                <label>ID</label>                                
                <input type="text" name="txtId" class="form-control" disabled required value="{!! old('txtId',isset($ward) ? $ward->id : null)!!}" />
            </div>                        
        </div>

        <div class="col-md-4">                        
            <div class="form-group">
                <label>Tên Quận/Huyện</label>                                
                <input type="text" name="txtName" class="form-control" required  value="{!! old('txtName',isset($ward) ? $ward->name : null)!!}" />
            </div>                        
        </div>
        <div class="col-md-3">                        
            <div class="form-group">
                <label>Loại</label>                                
                <input type="text" name="txtType" class="form-control"  value="{!! old('txtType',isset($ward) ? $ward->type : null)!!}" />
            </div>                        
        </div> 
        <div class="col-md-3">                        
            <div class="form-group">
                <label>Vị trí</label>                                
                <input type="text" name="txtLocation" class="form-control"  value="{!! old('txtLocation',isset($ward) ? $ward->location : null)!!}" />
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

    function getParentDistrict () {
       var url = '{!! route('admin.location.getDistrictByProvince') !!}/'; 
        var e = document.getElementById("wProvince");
        var idProvince = e.options[e.selectedIndex].value;
         
        $.ajax({
            url: url + idProvince,
            type: "GET", 
            cache: false,
            data: {"province_id":idProvince},
            success: function (data){
                var html = '<label>Quận Huyện</label><select name="selectDistrict" class="form-control selectpicker" required min="01" data-live-search="true" title="Vui lòng chọn một tỉnh"><option value="0">--Chọn quận huyện--</option>';
                var district_id = <?php if (isset($data)) { echo $data->district_id; } else { echo '0';}?>;
                for(var i=0; i<data.length; i++) {
                    if (district_id == data[i].id) {
                        html += '<option selected="selected" value="' + data[i].id + '">' + data[i].type +' '+ data[i].name + '</option>';
                    } else{
                    html += '<option value="' + data[i].id + '">' + data[i].type +' '+ data[i].name + '</option>';
                    };

                }
                html +='</select>';
                $('#wDistrict').html(html);
                $('.selectpicker').selectpicker();
            }
        }); 
    }
    $('#wProvince').load = getParentDistrict();

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
               var html = '<label>Quận Huyện</label><select name="selectDistrict" class="form-control selectpicker" required min="01" data-live-search="true" title="Vui lòng chọn một tỉnh"><option value="0">--Chọn quận huyện--</option>';
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