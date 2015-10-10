@extends('admin.master')
@section('content')
@section('controller','Localtion')
@section('action','Edit')
@section('title', 'Sửa - Tỉnh thành')
<!-- /.col-lg-12 -->
<form id="dangtin" role="form" method="POST" action="">
 @include("admin.blocks.error")
 <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
<div class="wrapper">
 
    <div class="row">

        <div class="col-md-2">                        
            <div class="form-group">
                <label>ID Tỉnh</label>                                
                <input type="text" name="txtId" class="form-control" disabled required value="{!! old('txtId',isset($province) ? $province->id : null)!!}" />
            </div>                        
        </div>

        <div class="col-md-4">                        
            <div class="form-group">
                <label>Tên Tỉnh</label>                                
                <input type="text" name="txtName" class="form-control" required  value="{!! old('txtName',isset($province) ? $province->name : null)!!}" />
            </div>                        
        </div>
        <div class="col-md-3">                        
            <div class="form-group">
                <label>Loại</label>                                
                <input type="text" name="txtType" class="form-control"  value="{!! old('txtType',isset($province) ? $province->type : null)!!}" />
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
 
@endpush


@endsection           