@extends('layouts.admin_dash')

@section('css')

  <!-- <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
@section('content')

<section class="content-header">

</section>

<section class="content">
    <div class="row">

        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add screenshots</h3>
                </div>

                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="{{ route('addScreenshots') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>Screenshots</label>
                            <input type="file" name="Videos"   accept="image/png, image/jpeg" class="form-control"  value="{{old('Videos')}}">
                           @error('Videos')
                            <small class="form-text text-muted" style="color: red;">The Screenshots field is required.</small>
                            @enderror
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
             

        </div>

    </div>
    <!-- /.row -->
</section>

    @endsection<!-- 
    @section('js')

      <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
    <script>  
    $(document).ready(function(){
      var fileData  = $('#upload_image');
      $image_crop = $('#image-preview').croppie({
        enableExif:true,
        viewport:{
          width:250,
          height:250,
          // type:'circle'
        },
        boundary:{
          width:300,
          height:300
        }
      });

      $('#upload_image').change(function(){
        var reader = new FileReader();

        reader.onload = function(event){
          $image_crop.croppie('bind', {
            url:event.target.result
          }).then(function(){
            // console.log('jQuery bind complete');
          });
        }
        reader.readAsDataURL(this.files[0]);
      // console.log(fileData);
      });

      $('.crop_image').click(function(event){

        
        $image_crop.croppie('result', {
          type:'canvas',
          size:'viewport'
        }).then(function(response){
          var _token = $('input[name=_token]').val();
         
          $.ajax({
            url:'{{ route("addScreenshots") }}',
            type:'post',
            data:{"image":response, _token:_token,},
            dataType:"json",
            success:function(data)
            {
              window.location = "{{ url('Gallery/Trading_screenshots') }}";
            }
          });
        });
      });
      
    });  
    </script>

    @endsection -->