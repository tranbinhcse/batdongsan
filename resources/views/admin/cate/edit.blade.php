@extends('admin.master')
@section('controller','Category')
@section('action','Edit')
@section('content') 

@include('admin.blocks.error')
 
<form id="dangtin" role="form" method="POST" action="">
<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
    <div class="wrapper">
        <div class="page-subtitle">
            <h3>Thông tin chung</h3> 
        </div>
        <div class="row">
            <div class="col-md-6">                        
                <div class="form-group">
                    <label>Tiêu đề danh mục <span>Bất động sản</span></label>                                
                    <input type="text" name="txtCateName" class="form-control" minlength="10" maxlength="255" required value="{!! old('txtCateName',isset($data) ? $data['name'] : null) !!}"/>
                </div>  
            </div>                
                <div class="col-md-6">                        
                    <div class="form-group">
                        <label>Danh mục cha <span>Nhà Đất</span></label>
                        <select name="selectparent" class="form-control selectpicker" data-live-search="true"  title='Chọn ít nhất 1 loại nhà đất'>
                            <option value="0">--Chọn danh mục cha--</option>
                            <?php cate_parent ($parent,0,"-",$data["parent_id"]) ?>
                        </select>
                    </div>                        
                </div>
            </div>
              
    
    
    <!-- summernote plugin -->
<div class="wrapper wrapper-white">
    <div class="page-subtitle">
        <h3>Mô tả chi tiết</h3>
        <p>Super Simple WYSIWYG Editor on Bootstrap</p>
    </div>
 
    <textarea class="form-control summernote" rows="3" name="txtDescription">{!! old('txtDescription',isset($data) ? $data['desciption'] : null) !!}</textarea>

    <div class="col-md-12">                        
        <div class="form-group">
            <label><span>Meta Keyword</span></label>                                
            <input type="text" name="txtMeta" class="form-control" value="{!! old('txtMeta',isset($data) ? $data['metakey'] : null) !!}"/>
        </div>                        
    </div>

 

    <div class="col-md-12">
        <div class="form-group">
            <label>Tags <span>Input</span></label>                                
            <input type="text" class="tags" name="txtKeywords" value="{!! old('txtKeywords',isset($data) ? $data['keywords'] : null) !!}"/>
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




@endsection
