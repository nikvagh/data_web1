
@extends('layouts.new_pro') @section('content')

  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/contact.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">

                    <h2 class="page-title">{{ $title }}
                      </h2>
                 <!--    <ol class="breadcrumb">

                          

                            <li>Control panel</li>

                        </ol> -->
                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">

                    </nav>

                </div>

            </div>

        </div>

    </div>

  </section>
<!-- start body -->
<section class="card-body">
    <div class="container pt-120 pb-120">
    
   <!--  <div class="container">
        <h4>{{ $title }}</h4> -->
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
                    
                    <input type="submit" class="btn btn-primary float-right" value="submit" >
                  </div>

                </form>
            </div>
        </div>
    </div>
</section>

<!-- end body -->
  
@endsection





