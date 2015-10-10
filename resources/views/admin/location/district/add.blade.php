@extends('admin.master')
@section('content')
@section('controller','District')
@section('action','Add')
@section('title', 'Thêm - Quận Huyện')
<!-- /.col-lg-12 -->
<form id="dangtin" role="form" method="POST" action="">
 @include("admin.blocks.error")
 <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
<div class="wrapper">
 
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
    <div class="row">
        <div class="col-md-9">                        
            <div class="form-group">
                <label>Tỉnh thành</label>
                <select name="selectProvince" class="form-control selectpicker" required min="01" data-live-search="true" title="Vui lòng chọn một tỉnh"> 
                    <option value="0">--Chọn tỉnh thành--</option>
                    @foreach ($province as $item)
                      
                            <option value="{!! $item['id'] !!}">{!!$item['type'].' '. $item['name'] !!}</option>
                         
                    @endforeach
                </select>
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