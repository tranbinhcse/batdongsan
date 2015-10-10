 
@if (count($errors) > 0)
     <script>
 

    $(document).ready(function(){
    	@foreach ($errors->all() as $error)
      setTimeout(function() {noty({
            text: '{!! $error  !!}',
            layout:'topRight',
            type:'error',
            timeout:15000
        });
      });
       @endforeach
    });

</script>
@endif