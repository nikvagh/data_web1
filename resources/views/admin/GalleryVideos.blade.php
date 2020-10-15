
@extends('layouts.new') @section('content')

<!-- start body -->
<section class="card-body">
    <div class="container">
        <h4>{{ $title }}</h4>
        <div class="col-md-12">
            <div class="box mx-auto col-md-6">
        <form  method="post" enctype="multipart/form-data" action="{{ route('addVideos') }}">
   
    

                   @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>Videos</label>
                            <input type="file" name="Videos"   accept="video/mp4"   class="form-control"  value="{{old('Videos')}}">
                           @error('Videos')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                   <div class="form-group">
                    
                    <input type="submit" class="btn btn-cus float-right" value="withdraw" >
                  </div>

                </form>
            </div>
        </div>
    </div>
</section>

<!-- end body -->
  
@endsection





