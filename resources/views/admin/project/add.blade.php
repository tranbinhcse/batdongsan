@extends('admin.master')
@section('content')
@section('controller','Project')
@section('action','Add')
@section('title', 'Thêm dự án bất động sản')
<!-- /.col-lg-12 -->

  
  <form id="dangtin" role="form" action="" method="POST" enctype="multipart/form-data">
 
 <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
    <div class="wrapper">
        <div class="page-subtitle">
            <h3>Thông tin chung</h3> 
        </div>
        <div class="row">
            <div class="col-md-12">                        
                <div class="form-group">
                    <label>Tên dự án</label>                                
                    <input type="text" name="txtName" class="form-control" minlength="10" maxlength="255" required value=""/>
                </div>                        
            </div>

            <div class="col-md-12">
                 
                <div class="col-md-3">                        
                    <div class="form-group">
                        <label>Loại <span>dự án</span></label>
                        <select name="loainhadat" class="form-control selectpicker" required min="0" data-live-search="true"  title='Chọn ít nhất 1 loại nhà đất'>
                            <option value="-1">--Chọn loại nhà đất--</option>
                            <option value="1">Bán căn hộ chung cư</option>
                            <option value="2">Bán nhà riêng</option>
                            <option value="3">Bán đất nền</option>
                            <option value="4">Nhà mặt tiền</option>
                            <option value="5">Nhà kho</option>
                        </select>
                    </div>                        
                </div>
                <div class="col-md-3">                        
                    <div class="form-group">
                        <label>Diện <span>Tích</span></label>                                
                        <input name="txtDientich" type="number" class="form-control" required  value=""/>
                    </div>                        
                </div>
                <div class="col-md-3">                        
                    <div class="form-group">
                        <label>Ảnh đại diện</label>                                
                        <input name="fImage" type="file" class="form-control" required  value=""/>
                    </div>                        
                </div>
            </div>
             
        </div>

        <div class="row">
            
              
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Hình ảnh thêm</label>
                        <input type="file" name="fImageDetail[]" multiple>
                    </div>
                </div>
             
            
        </div>
    </div>

 
    <div class="wrapper">
        <div class="page-subtitle">
            <h3>Vị trí BDS</h3>
            <p>This jQuery plugin makes simple clientside form validation easy, whilst still offering plenty of customization options.</p>
        </div>

         <div class="row">
            <div class="col-md-4">                        
                <div class="form-group">
                    <label>Tỉnh <span>Thành phố</span></label>
                    <select name="selectProvince" id="wProvince" class="form-control selectpicker" title='Hãy chọn tỉnh/thành' data-live-search="true">
                        <option value="0">--Chọn tỉnh/thành--</option>
                        @foreach ($province as $item)
                        <option value="{!! $item['id']!!}">{!! $item['type'].' '.$item['name']!!}</option>
                        @endforeach
                    </select>
                </div>                        
            </div>
            <div class="col-md-4">                        
                <div class="form-group" id="wDistrict">
                    <label>Quận <span>Huyện</span></label>
                    <select name="txtDistrict" class="form-control selectpicker" title='Hãy chọn quận/huyện' data-live-search="true"> 
                        <option value="0">--Chọn quận/huyện--</option>
                    </select>
                </div>                        
            </div>
            <div class="col-md-4">                        
                <div class="form-group" id="wWard">
                    <label>Xã <span>Phường</span></label>
                    <select name="txtWard" class="form-control selectpicker" title='Hãy chọn xã/phường' data-live-search="true">
                        <option value="">--Chọn xã/phường--</option>  
                    </select>
                </div>                        
            </div>
            <div class="col-md-12">                        
                <div class="form-group">
                    <label>Địa điểm <span>Bất động sản</span></label>                                
                    <input type="text" name="txtAddress" class="form-control" minlength="10" maxlength="255" required value="{!! old('txtAddress',isset($data) ? $data['address'] : null)!!}"/>
                </div>                        
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-white">
        <div class="page-subtitle">
            <h3>Thông tin khác</h3>
            <p>This jQuery plugin makes simple clientside form validation easy, whilst still offering plenty of customization options.</p>
        </div>

        <div class="col-md-4">                        
            <div class="form-group">
                <label>Mặt tiền</label>
                <div class="input-group">                          
                    <input type="text" name="txtMattien" class="form-control" value=""/>
                    <span class="input-group-addon">m</span>
                </div> 
            </div>                        
        </div>

        <div class="col-md-4">                        
            <div class="form-group">
                <label>Đường trước nhà</label>                                
                <div class="input-group">                          
                    <input type="text" name="txtDtruocnha" class="form-control" value=""/>
                    <span class="input-group-addon">m</span>
                </div> 
            </div>                        
        </div>

        <div class="col-md-4">                        
            <div class="form-group">
                <label>Số tầng</label>                                
                <input type="text" name="txtStang" class="form-control" value=""/>
            </div>                        
        </div>
        <div class="col-md-4">                        
            <div class="form-group">
                <label>Số phòng</label>                                
                <input type="text" name="txtSphong" class="form-control" value=""/>
            </div>                        
        </div>
        <div class="col-md-4">                        
            <div class="form-group">
                <label>Số toilet</label>                                
                <input type="text" name="txtToilet" class="form-control" value=""/>
            </div>                        
        </div>
        <div class="col-md-4">                        
            <div class="form-group">
                <label>Hướng BDS</label>
                <select name="txtHuong" class="form-control selectpicker">
                    <option value="-1">--Chọn xã/phường--</option>
                    <option value="1">Bán căn hộ chung cư</option>
                    <option value="2">Bán nhà riêng</option>
                    <option value="3">Bán đất nền</option>
                    <option value="4">Nhà mặt tiền</option>
                    <option value="5">Nhà kho</option>
                </select>
            </div>                        
        </div>
    </div>
    <!-- summernote plugin -->
<div class="wrapper">
    <div class="page-subtitle">
        <h3>Mô tả chi tiết</h3> 
    </div>
    <textarea name="txtdesciption" class="summernote"></textarea>
 
 

</div>
<div class="wrapper wrapper-white">
    <div class="page-subtitle">
        <h3>SEO</h3>
        <p>Tối ưu hóa cho seo</p>
    </div>
 
    <div class="col-md-12">                        
        <div class="form-group">
            <label>Meta Keyword</label>                                
            <input type="text" name="txtMetakey" class="form-control" value=""/>
        </div>                        
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <label>Tags <span>Input</span></label>                                
            <input type="text" class="tags" name="txtTags" value=""/>
        </div>
    </div>
  
    
</div>                        
<!-- ./summernote plugin -->
   <div class="wrapper">
        <div class="pull-right margin-top-10">
            <button class="btn btn-warning hide-prompts" type="button">Hide prompts</button>
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
               var html = '<label>Quận Huyện</label><select name="selectDistrict" id="District" class="form-control selectpicker" required min="01" data-live-search="true" title="Vui lòng chọn một tỉnh"><option value="0">--Chọn quận huyện--</option>';
               for(var i=0; i<data.length; i++) {
                    html += '<option value="' + data[i].id + '">' + data[i].type +' '+ data[i].name + '</option>';
                }
                html +='</select>';
                $('#wDistrict').html(html);
                $('.selectpicker').selectpicker();
            }
        });
    });

     $('#wDistrict').on('change',function () { 
        var url = '{!! route('admin.location.getWardByDistrict') !!}/'; 
        var e = document.getElementById("District");
        var idDistrict = e.options[e.selectedIndex].value;
         
        $.ajax({
            url: url + idDistrict,
            type: "GET", 
            cache: false,
            data: {"district_id":idDistrict},
            success: function (data){
               var html = '<label>Xã/Phường/Thị Trấn</label><select name="selectWard" class="form-control selectpicker" required min="01" data-live-search="true" title="Vui lòng chọn một tỉnh"><option value="0">--Chọn quận huyện--</option>';
               for(var i=0; i<data.length; i++) {
                    html += '<option value="' + data[i].id + '">' + data[i].type +' '+ data[i].name + '</option>';
                }
                html +='</select>';
                $('#wWard').html(html);
                $('.selectpicker').selectpicker();
            }
        });
    });


});
 </script>
 @include("admin.blocks.error")
@endpush


@endsection