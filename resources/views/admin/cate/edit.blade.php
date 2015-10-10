@extends('admin.master')
@section('controller','Category')
@section('action','Edit')
@section('content') 
 
 <div class="row">

  <form class="form-horizontal" id="category" role="form" method="POST" action="{!! route('admin.cate.getAdd') !!}">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
    <div class="col-md-12">

      <div class="widget wgreen">
        
        <div class="widget-head">
          <div class="pull-left">Danh mục bất động sản</div>
          <div class="widget-icons pull-right">
            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>  
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="widget-content">
          <div class="padd">

            <div class="form-group">
              <label class="col-lg-3 control-label">Tiêu đề danh mục</label>
              <div class="col-lg-9">
                <input type="text" name="txtCateName" class="form-control" placeholder="Input Box" value="{!! old('txtCateName',isset($data) ? $data['name'] : null) !!}">
              </div>
            </div> 
            
            <div class="form-group">
              <label class="col-lg-3 control-label">Mô tả ngắn</label>
              <div class="col-lg-9">
                <textarea class="form-control" rows="2" name="txtDescription" placeholder="Textarea">{!! old('txtDescription',isset($data) ? $data['desciption'] : null) !!}</textarea>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-lg-3 control-label">Loại</label>
              <div class="col-lg-9">
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsType" id="optionsRadios1" value="1" {!! old('optionsType',(isset($data) && $data['type']==1) ? 'checked' : '') !!}>
                    BDS Bán
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsType" id="optionsRadios2" value="2" {!! old('optionsType',(isset($data) && $data['type']==2) ? 'checked' : '') !!}>
                    BDS Cho thuê
                  </label>
                </div>
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
                <textarea class="form-control" name="txtMeta" rows="2" placeholder="Textarea">{!! old('txtMeta',isset($data) ? $data['metakey'] : null) !!}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">Keywords</label>
              <div class="col-lg-9">
                <input type="text" name="tags" class="form-control" placeholder="Input Box" value="{!! old('tags',isset($data) ? $data['keywords'] : null) !!}">
              </div>
            </div> 

          </div>
        </div>
        
      </div>
    
    </div>
    <div class="col-lg-7">
      <div class="form-group">
        <div class="col-lg-12 text-right">
          <button class="btn btn-lg btn-primary" type="submit">Lưu Lại</button>
          <button type="button" class="btn btn-lg btn-danger">Xóa</button>
        </div>
      </div> 
    </div>

  </form>

  </div> 
 
@push('scripts')
@include('admin.blocks.error')
@endpush


@endsection
