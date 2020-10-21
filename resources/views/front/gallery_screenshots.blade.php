@extends('layouts.new')
@section('css')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css">
@endsection

 @section('content')
    
  <!-- ======= Hero Section ======= -->
 

  <main id="main">

    <!-- ======= About Us Section ======= -->
   
   

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Our Gallery</h2>
          <br>
          <br>
          <h2>Trading Screen Shot</h2>
        </div>

       

        <div class="row portfolio-container">

  @foreach ($data as $key)

          <div class="col-lg-3 col-md-6 portfolio-item ">
            <div class="portfolio-wrap">
              <img src="{{ asset('/uploads/Videos/thumb/').'/'.'300X300_'.$key->video }}" class="img-responsive imggallery">
              <div class="portfolio-info">
                
                <div class="portfolio-links">
                 <a href="{{ asset('/uploads/Videos/').'/'.$key->video }}" data-lightbox='{{$key->video}}' ><i class="icofont-eye"></i></a>
                 
                </div>
              </div>
            </div>
          </div>

         @endforeach

          

        
        </div>

         <div class="section-title">

          <br>
          <br>
        
          <h2>Trading Video Shot</h2>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">

           @foreach ($video as $key)

<video width="400" controls >
<source src="{{ asset('/uploads/Videos/').'/'.$key->video }}" type="video/mp4">
</video>
         
          @endforeach


             
          </div>

          <br>
          <br>

         

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
   

  </main><!-- End #main -->


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