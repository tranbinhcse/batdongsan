@extends('admin.master')
@section('content')
@section('controller','Property')
@section('action','Add')
@section('title', 'Thêm - Tin BDS')

<div class="row">
<form id="postProperty" class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
<div class="col-lg-7">
  <div class="widget wgreen">
    
    <div class="widget-head">
      <div class="pull-left">Tin bất động sản</div>
      <div class="widget-icons pull-right">
        <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>  
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="widget-content">
      <div class="padd">

        <div class="form-group required">
          <label class="col-lg-3 control-label ">Tiêu đề bài viết</label>
          <div class="col-lg-9"> 
          <input type="text" name="txtName" class="form-control" required minlength="5" maxlength="255" placeholder="Input Box">
          </div>
        </div> 
        
        <div class="form-group">
          <label class="col-lg-3 control-label">Mô tả ngắn</label>
          <div class="col-lg-9">
            <textarea class="form-control" rows="2" placeholder="Textarea"></textarea>
          </div>
        </div>    

        <div class="form-group">
          <label class="col-lg-3 control-label">Loại</label>
          <div class="col-lg-9">
            <div class="radio">
              <label>
                <input type="radio" name="optionType" id="Type1" value="1" checked>
                BDS Bán
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionType" id="Type2" value="2">
                BDS Cho thuê
              </label>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-lg-3 control-label">Loại bất động sản</label>
          <div class="col-lg-9"  id="cate">
            <select class="form-control" required name="selectCategory">
              <option value="0">--Chọn danh mục--</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Tỉnh/Thành</label>
          <div class="col-lg-5">
            <select name="selectProvince" id="wProvince" class="form-control" data-live-search="true" data-size="10" required min="1">
            <option value="0">--Chọn tỉnh/thành--</option>
                @foreach ($province as $item)
                    @if($item['id'] == 27)
                    <option selected="selected" value="{!! $item['id']!!}">{!! $item['type'].' '.$item['name']!!}</option>
                    @else
                    <option value="{!! $item['id']!!}">{!! $item['type'].' '.$item['name']!!}</option>
                    @endif
                @endforeach
            </select>
          </div>
        </div>

        <div class="form-group" id="wDistrict">
          <label class="col-lg-3 control-label">Quận/Huyện</label>
          <div class="col-lg-5">
            <select name="selectDistrict" class="form-control" data-live-search="true" required min="0"> 
                <option value="">--Chọn Tỉnh/Thành trước--</option>
            </select>
          </div>
        </div>

        <div class="form-group" id="wWard">
          <label class="col-lg-3 control-label">Xã/Phường/Thị Trấn</label>
          <div class="col-lg-5">
            <select name="selectWard" class="form-control" data-live-search="true" required min="0"> 
                <option value="">--Chọn Quận/Huyện trước--</option>
            </select>
          </div>
        </div> 

        <div class="form-group">
          <label class="col-lg-3 control-label">Địa chỉ</label>
          <div class="col-lg-9">
            <input name="txtAddress" type="text" class="form-control" required placeholder="Input Box">
          </div>
        </div> 

        <div class="form-group">
          <label class="col-lg-3 control-label">Ảnh đại diện</label>
          <div class="col-lg-9">
            <input name="fImage" type="file" required accept="image/*">
          </div>
        </div>              

        <div class="form-group">
          <label class="col-lg-3 control-label">Chi tiết tin</label>
          <div class="col-lg-9">
            <textarea name="txtDescription" class="form-control cleditor" required rows="3" placeholder="Textarea"></textarea>
          </div>
        </div> 
        
      </div>
    </div>

  </div>

  <div class="widget wgreen">

    <div class="widget-head">
      <div class="pull-left">SEO</div>
      <div class="widget-icons pull-right">
        <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>  
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="widget-content">
      <div class="padd">

        <div class="form-group">
          <label class="col-lg-3 control-label">Meta keyword</label>
          <div class="col-lg-9">
            <textarea name="txtMeta" class="form-control" rows="2" placeholder="Textarea"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Keywords</label>
          <div class="col-lg-9">
            <input name="txtTags" type="text" class="form-control" placeholder="Input Box">
          </div>
        </div> 

      </div>
    </div>
    
  </div>

</div>

<div class="col-lg-5">
  <div class="widget wgreen">

    <div class="widget-head">
      <div class="pull-left">Thông tin thêm</div>
      <div class="widget-icons pull-right">
        <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>  
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="widget-content">
      <div class="padd">

        <div class="form-group">
          <label class="col-lg-3 control-label">Ảnh chi tiết</label>
          <div class="col-lg-9">
            <input name="fImageDetail[]" type="file" multiple accept="image/*">
          </div>
        </div> 


        <div class="form-group">
          <label class="col-lg-3 control-label">Giá</label>
          <div class="col-lg-5">
            <input name="txtPrice" type="text" class="form-control" placeholder="Input Box">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Đơn vị giá</label>
          <div class="col-lg-5">
            <select name="selectUnit" class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>  

        <div class="form-group">
          <label class="col-lg-3 control-label">Diện tích</label>
          <div class="col-lg-5">
            <input name="txtAcreage" type="text" class="form-control" placeholder="Input Box">
          </div>
        </div> 

        <hr>

        <div class="form-group">
          <label class="col-lg-3 control-label">Mặt tiền</label>
          <div class="col-lg-9">
            <input name="txtFacades" type="text" class="form-control" placeholder="Input Box">
          </div>
        </div> 

        <div class="form-group">
          <label class="col-lg-3 control-label">Đường trước nhà</label>
          <div class="col-lg-9">
            <input name="txtRoad" type="text" class="form-control" placeholder="Input Box">
          </div>
        </div> 

        <div class="form-group">
          <label class="col-lg-3 control-label">Số tầng</label>
          <div class="col-lg-9">
            <input name="txtFLoor" type="text" class="form-control" placeholder="Input Box">
          </div>
        </div> 

        <div class="form-group">
          <label class="col-lg-3 control-label">Số phòng</label>
          <div class="col-lg-9">
            <input name="txtRoom" type="txtRoom" class="form-control" placeholder="Input Box">
          </div>
        </div> 

        <div class="form-group">
          <label class="col-lg-3 control-label">Hướng BDS</label>
          <div class="col-lg-5">
            <select name="selectDirection" class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Toilet</label>
          <div class="col-lg-9">
            <input name="txtToilet" type="text" class="form-control" placeholder="Input Box">
          </div>
        </div> 

      </div>
    </div>

  </div>

  <div class="widget wgreen">

    <div class="widget-head">
      <div class="pull-left">Thông tin liên hệ</div>
      <div class="widget-icons pull-right">
        <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="widget-content">
      <div class="padd">

        <div class="form-group">
          <label class="col-lg-3 control-label" >Họ tên</label>
          <div class="col-lg-9">
            <input name="txtUserName" type="text" required class="form-control" placeholder="Input Box">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Địa chỉ</label>
          <div class="col-lg-9">
            <input name="txtUserAddress" type="text" class="form-control" placeholder="Input Box">
          </div>
        </div> 

        <div class="form-group">
          <label class="col-lg-3 control-label">Điện thoại</label>
          <div class="col-lg-9">
            <input name="txtUserPhone" id="phonenumber" pattern="[0][1-9][0-9]{8}" type="txt"  class="form-control" placeholder="Input Box">
          </div>
        </div> 

        <div class="form-group">
          <label class="col-lg-3 control-label">Di động *</label>
          <div class="col-lg-9">
          <input name="txtUserMobile" id="mobilephone" required pattern="[0]{1}[9][0-9]{8}|[0]{1}[1][0-9]{9}|[+][8][4][9][0-9]{8}|[+][8][4][1][0-9]{9}" type="txt" class="form-control" placeholder="Input Box">
          </div>
        </div> 

        <div class="form-group">
          <label class="col-lg-3 control-label">Email</label>
          <div class="col-lg-9">
            <input name="txtUserEmail" type="email" class="form-control" placeholder="Input Box">
          </div>
        </div> 

      </div>
    </div> 
  </div>

</div> 
<div class="col-lg-12">

  <div class="widget wgreen">
    <div class="widget-head">
      <div class="pull-left">Trạng thái tin</div> 
      <div class="clearfix"></div>
    </div>

    <div class="widget-content">
      <div class="padd">
        <div class="form-group">
          <label class="col-lg-3 control-label">Ngày Đăng</label>
          <div class="col-lg-9">
            <div id="dateopen" class="input-append input-group dtpicker">
                <input name="txtDateOpen" type="text" required class="form-control">
                <span class="input-group-addon add-on">
                    <span class="fa fa-calendar"></span> 
                </span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Ngày hết hạn</label>
          <div class="col-lg-9">
            <div id="dateclose" class="input-append input-group dtpicker">
                <input name="txtDateClose" required type="text" class="form-control">
                <span class="input-group-addon add-on">
                  <span class="fa fa-calendar"></span> 
                </span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Trạng Thái</label>
          <div class="col-lg-9">
            <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="radio" name="selectStatus" id="option1" autocomplete="off" value='1' checked> Chờ duyệt
              </label>
              <label class="btn btn-default">
                <input type="radio" name="selectStatus" id="option2" value='2' autocomplete="off"> Ẩn tin
              </label>
              <label class="btn btn-success">
                <input type="radio" name="selectStatus" id="option3" value='3' autocomplete="off"> Hiển thị tin
              </label>
            </div>
          </div>
        </div> 

     

        
          <div class="form-group">
            <div class="col-lg-12 text-right">
              <button class="btn btn-lg btn-primary" type="submit">Lưu Lại</button>
              <button type="button" class="btn btn-lg btn-danger">Xóa</button>
            </div>
          </div> 
        </div>
     

      </div>
    </div>
    
  </div>
</div> 
</form>
</div>


@push('scripts')

<script  type="text/javascript">
   $(function () {
      var day =  new Date();
      var maxday = new Date(new Date().getTime() + 90*86400000);
        $('#dateopen').datetimepicker({
          format: 'DD/MM/YYYY',
          minDate: day
        });
        $('#dateclose').datetimepicker({
            useCurrent: false,
            format: 'DD/MM/YYYY',
            minDate: day
        });
        $("#dateopen").on("dp.change", function (e) {
            $('#dateclose').data("DateTimePicker").minDate(e.date);
        });
        $("#dateclose").on("dp.change", function (e) {
            $('#dateopen').data("DateTimePicker").maxDate(e.date);
        });
    });



 $(document).ready(function(){

    $('input:radio[name=optionType]').on('change', function () {
        var url = '{!! URL("admin/property/cateproprty") !!}/';
        var type = $('input:radio[name=optionType]:checked').val();
        $.ajax({
            url: url + type,
            type: 'GET',
            cache: false,
            data: {'type':type},
            success: function (data){
                var html = '<select class="form-control" required name="selectCategory" ><option value="">--Chọn danh mục--</option>';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value="' + data[i].id + '">'+ data[i].name + '</option>';
                };
                html += '</select>';
                $('#cate').html(html);
                $('select').selectpicker();
                $("#postProperty").validate({
                  highlight: function(element) {
                        $(element).closest('.form-group').addClass('has-error');
                    },
                    unhighlight: function(element) {
                        $(element).closest('.form-group').removeClass('has-error');
                    }, 
                    rules:{
                      selectCategory:{
                        required: true,
                        min:1
                      },
                    }
                });
            }
        }); 
    });
    
    function getCate() {
        var url = '{!! URL("admin/property/cateproprty") !!}/';
        var type = $('input:radio[name=optionType]:checked').val();
        $.ajax({
            url: url + type,
            type: 'GET',
            cache: false,
            data: {'type':type},
            success: function (data){
              var html = '<select class="form-control" required name="selectCategory" aria-required="true"><option value="">--Chọn danh mục--</option>';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value="' + data[i].id + '">'+ data[i].name + '</option>';
                };
                html += '</select>';
                $('#cate').html(html);
                $('select').selectpicker();
                $("#postProperty").validate({
                  highlight: function(element) {
                        $(element).closest('.form-group').addClass('has-error');
                    },
                    unhighlight: function(element) {
                        $(element).closest('.form-group').removeClass('has-error');
                    }, 
                });
            }
        }); 
    };
    
    $('input:radio[name=optionType]').load = getCate();
    function loaddefaultBN () {
   
    
        var url = '{!! route('admin.location.getDistrictByProvince') !!}/'; 
        
        var idProvince = 27;
         
        $.ajax({
            url: url + idProvince,
            type: "GET", 
            cache: false,
            data: {"province_id":idProvince},
            success: function (data){
               var html = '<label class="col-lg-3 control-label">Quận/Huyện</label><div class="col-lg-5"><select name="selectDistrict" class="form-control" id="District" data-live-search="true" required data-size="10"><option value="">--Chọn quận/huyện--</option>';
               for(var i=0; i<data.length; i++) {
                    html += '<option value="' + data[i].id + '">' + data[i].type +' '+ data[i].name + '</option>';
                }
                html +='</select></div>';
                $('#wDistrict').html(html);
                $('select').selectpicker();
                $("#postProperty").validate({
                  highlight: function(element) {
                        $(element).closest('.form-group').addClass('has-error');
                    },
                    unhighlight: function(element) {
                        $(element).closest('.form-group').removeClass('has-error');
                    }, 
                });
            }
        });
    }
  
     $('#wProvince').load = loaddefaultBN();


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
               var html = '<label class="col-lg-3 control-label">Quận/Huyện</label><div class="col-lg-5"><select name="selectDistrict" class="form-control" id="District" data-live-search="true" required data-size="10"><option value="">--Chọn quận/huyện--</option>';
               for(var i=0; i<data.length; i++) {
                    html += '<option value="' + data[i].id + '">' + data[i].type +' '+ data[i].name + '</option>';
                }
                html +='</select></div>';
                $('#wDistrict').html(html);
                $('select').selectpicker();
                $("#postProperty").validate({
                  highlight: function(element) {
                        $(element).closest('.form-group').addClass('has-error');
                    },
                    unhighlight: function(element) {
                        $(element).closest('.form-group').removeClass('has-error');
                    }, 
                });
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
               var html = '<label class="col-lg-3 control-label">Xã/Phường/Thị Trấn</label><div class="col-lg-5"><select name="selectWard" class="form-control" data-live-search="true" required data-size="10"><option value="">--Chọn Xã/Phường/Thị Trấn--</option>';
               for(var i=0; i<data.length; i++) {
                    html += '<option value="' + data[i].id + '">' + data[i].type +' '+ data[i].name + '</option>';
                }
                html +='</select>';
                $('#wWard').html(html);
                $('select').selectpicker();
                $("#postProperty").validate({
                  highlight: function(element) {
                        $(element).closest('.form-group').addClass('has-error');
                    },
                    unhighlight: function(element) {
                        $(element).closest('.form-group').removeClass('has-error');
                    }, 
                });
            }
        });
    });


});
$("#postProperty").validate({
  errorClass:"has-error",
  validClass:"has-success",
  errorElement:"span",
  ignore: [],
  errorPlacement: function(error,element){
            $(element).before(error);                    
            $(element).parents(".form-group").addClass("has-error");
        },
  highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    }, 
});
 

 </script>

@include("admin.blocks.error")
@endpush

@endsection           