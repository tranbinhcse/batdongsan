@extends('admin.master')
@section('content')
@section('controller','News')
@section('action','edit')
@section('title', 'Sửa tin tức')
<!-- /.col-lg-12 -->

@include("admin.blocks.error")

<form id="dangtin" action="" method="POST" enctype="multipart/form-data">
 
 <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
     <div class="wrapper">
                               
        <div class="row">
            <div class="col-md-12">                        
                <div class="form-group">
                    <label>Tiêu đề bài viết</label>                                
                    <input type="text" name="txtName" class="form-control" minlength="5" maxlength="255" required value="{!! old('txtName',isset($data) ? $data['name'] : null)!!}"/>
                </div>                        
            </div>

            <div class="col-md-12">
                 
                <div class="col-md-3">                        
                    <div class="form-group">
                        <label>Danh mục tin tức</label>
                        <select name="selectcate" class="form-control selectpicker" data-live-search="true"  title='Chọn ít nhất 1 loại nhà đất'>
                            <option value="0">--Chọn danh mục cha--</option>  
                            <?php cate_parent($parent,0,"-",$data["catenews_id"]) ?>
                        
                        </select>
                    </div>                        
                </div>

                <div class="col-md-9">                        
                    <div class="form-group">
                        <label>Dự án liên quan</label>
                        <select name="selectproject" class="form-control selectpicker" data-live-search="true">
                            <option value="0">--Chọn danh mục--</option>
                            @foreach ($project as $pro)
                            <?php if ($data['projectid'] == $pro['id']) { ?>
                       <option selected="selected" value="{!! $pro['id'] !!}">--{!! $pro['name'] !!}--</option>
                           <?php } else { ?>
                                <option value="{!! $pro['id'] !!}">--{!! $pro['name'] !!}--</option>
                            <?php } ?>
                            @endforeach
                        </select>
                    </div>                        
                </div>
                
            </div>
             
        </div>
    </div>

    <div class="wrapper  wrapper-white">
        <div class="form-group">
                    <label>Ảnh đại diện</label>                                
                    <img src="{!! asset('uploads/news/'.$data['id'].'/'.$data['image']) !!}" alt="" width="200">
                    <input type="hidden" name="img_current" value="{!! $data['image'] !!}" />
                </div>                        
                                  
                <div class="form-group">                              
                    <input type="file" name="fImage" id="fImage" />
                </div>  



    <div class="row margin-top-20"> 
        <h3>Bài viết chi tiết</h3>
        <textarea name="txtDescription" class="summernote">{!! old('txtDescription',isset($data) ? $data['description'] : null)!!}</textarea>
    </div>  
     
     <div class="col-md-12">                        
        <div class="form-group">
            <label>Meta Keyword</label>                                
            <input type="text" name="txtMetakey" class="form-control" value="{!! old('txtMetakey',isset($data) ? $data['metakey'] : null)!!}"/>
        </div>                        
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <label>Tags <span>Input</span></label>                                
            <input type="text" class="tags" name="txtTags" value="{!! old('txtTags',isset($data) ? $data['tags'] : null)!!}"/>
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
               