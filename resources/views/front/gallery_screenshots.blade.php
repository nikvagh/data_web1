@extends('layouts.new_pro')
@section('css')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css">
@endsection

 @section('content')
    

  <!-- inner-page-banner-section start -->

  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/blog.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">

                    <h2 class="page-title">Gallery</h2>

                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">

                       <!--  <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="home-one.html">Home</a></li>

                            <li class="breadcrumb-item">Blog 01</li>

                        </ol> -->

                    </nav>

                </div>

            </div>

        </div>

    </div>

  </section>

  <!-- inner-page-banner-section end -->

<section class="blog-section pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-area">
                    <h3>Trading Screen Shot</h3>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="row mb-none-30">
                                @foreach ($data as $key)
                                <div class="col-xl-3 col-md-6">
                                    <div class="blog-item blog-grid mb-30">
                                        <a href="{{ asset('/uploads/Videos/').'/'.$key->video }}" data-lightbox="{{$key->video}}">
                                            <img src="{{ asset('/uploads/Videos/thumb/').'/'.'300X300_'.$key->video }}" />
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <div class="row">
            <div class="col-lg-12">
                <div class="main-area">
                    <h3>Trading Video Shot</h3>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="row mb-none-30">
 @foreach ($video as $key)
                                <div class="col-xl-3 col-md-6">
                                    <div class="blog-item blog-grid mb-30">
                                        <video controls style="    max-height: 22vh;" >
                             <source src="{{ asset('/uploads/Videos/').'/'.$key->video }}" type="video/mp4">
                            </video>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@section('js')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
  <script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
@endsection