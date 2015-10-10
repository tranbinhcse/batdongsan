@extends('admin.master')
@section('content')
@section('controller','Dashboard')
@section('action','upload')
 



<div class="col-lg-12 text-center">


 {!! Form::open(['url' => route('upload-post'), 'class' => 'dropzone', 'files'=>true, 'id'=>'real-dropzone']) !!}
 
<div class="dz-message">

</div>

<div class="fallback">
    <input name="file" type="file" multiple />
</div>

<div class="dropzone-previews" id="dropzonePreview"></div>

<h4 style="text-align: center;color:#428bca;">Drop images in this area  <span class="glyphicon glyphicon-hand-down"></span></h4>

{!! Form::close() !!}





</div>





@endsection 