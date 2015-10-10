@extends('admin.master')
@section('content')
@section('controller','User')
@section('action','Add')
<!-- /.col-lg-12 -->
 
<form id="validate" role="form" method="POST" action="">
 @include("admin.blocks.error")
 <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
<div class="wrapper">
   
    <div class="row">
        <div class="col-md-4">                        
            <div class="form-group">
                <label>Tên thành viên</label>                                
                <input type="text" name="txtUser" class="form-control" minlength="5" maxlength="32" required value=""/>
            </div>                        
        </div>

        <div class="col-md-4">                        
            <div class="form-group">
                <label>Email thành viên</label>                                
                <input type="email" name="txtEmail" class="form-control" minlength="4" maxlength="32" required value=""/>
            </div>                        
        </div>

        <div class="col-md-3">                        
            <div class="form-group">
                <label>Số điện thoại</label>                                
                <input type="text" name="txtPhoneNumber" class="form-control" value=""/>
            </div>                        
        </div>
         <div class="col-md-4">                        
            <div class="form-group">
                <label>Nhóm</label>
                <select name="rdoLevel" class="form-control selectpicker" required> 
                    <option value="1">Administrator</option>
                    <option selected value="2">Thành viên</option>
                    <option value="3">Mods</option>
                    <option value="4">Chủ đầu tư</option> 
                </select>
            </div>                        
        </div>
        <div class="col-md-4">                        
            <div class="form-group">
                <label>Mật Khẩu</label>
                <input type="password" id="password2"  name="txtPass" class="form-control"  minlength="6" maxlength="32" required value=""/>
            </div>                        
        </div>

        <div class="col-md-4">                        
            <div class="form-group">
                <label>Nhập lại Mật khẩu</label>
                <input type="password" name="txtRePass" id="txtRePass" class="form-control" minlength="6" maxlength="32" required value=""/>
            </div>                        
        </div>


         
    </div>
</div>

                    
<!-- ./summernote plugin -->
<div class="wrapper">
    <div class="pull-right margin-top-10">
        <button class="btn btn-warning hide-prompts" type="reset">Hide prompts</button>
        <button class="btn btn-danger" type="submit">Submit</button>
    </div>
</div>


</form>



@endsection