@extends('admin.master')
@section('content')
@section('controller','Dashboard')
@section('action','upload')
 
@section('title', 'Page Title')


 
      <div class="container">
            <div class="dropzone" id="dropzoneFileUpload">
            </div>
        </div>
 
 
      <script type="text/javascript">
            var baseUrl = "{{ url('/') }}";
            var token = "{{ Session::getToken() }}";
            Dropzone.autoDiscover = false;
             var myDropzone = new Dropzone("div#dropzoneFileUpload", {
                 url: baseUrl+"/dropzone/uploadFiles",
                 params: {
                    _token: token
                  }
             });
             Dropzone.options.myAwesomeDropzone = {
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 2, // MB
                addRemoveLinks: true,
                accept: function(file, done) {
                  
                },
              };
         </script>
 


@endsection 