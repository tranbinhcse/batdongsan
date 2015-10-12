@extends('admin.master')
@section('content')
@section('controller','Project')
@section('action','Add')
@section('title', 'Thêm dự án bất động sản')
<!-- /.col-lg-12 -->
 

  <form id="dangtin" role="form" action="" method="POST" enctype="multipart/form-data">
   @include("admin.blocks.error")
 <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
     <div class="wrapper">
                               
        <div class="row">
            <div class="col-md-12">                        
                <div class="form-group">
                    <label>Tiêu đề bài viết</label>                                
                    <input type="text" name="txtName" class="form-control" minlength="5" maxlength="255" required value=""/>
                </div>                        
            </div>

            <div class="col-md-12">
                 
                <div class="col-md-3">                        
                    <div class="form-group">
                        <label>Danh mục tin tức</label>
                        <select name="selectcate" class="form-control selectpicker" data-live-search="true">
                            <option value="0">--Chọn danh mục--</option>
                            <?php cate_parent($catenews)?>
                        </select>
                    </div>                        
                </div>

                <div class="col-md-9">                        
                    <div class="form-group">
                        <label>Dự án liên quan</label>
                        <select name="selectproject" class="form-control selectpicker" data-live-search="true">
                            <option value="0">--Chọn danh mục--</option>
                            @foreach ($project as $pro)
                                <option value="{!! $pro['id'] !!}">--{!! $pro['name'] !!}--</option>
                            @endforeach
                        </select>
                    </div>                        
                </div>
                
            </div>
             
        </div>
    </div>

    <div class="wrapper  wrapper-white">
        <div class="page-subtitle">
            <h3>Hình ảnh</h3> 
        </div>
         <input name="fImage" type="file" class="form-control" required  value=""/>
    <div class="row margin-top-20"> 
        <h3>Bài viết chi tiết</h3>
        <textarea name="txtDescription" class="summernote"></textarea>
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



 


@endsection