@extends('layouts.front') @section('content')
 
 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact white-bg">
<div class="container" data-aos="fade-up">
  <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <h3>Check our <span>Gallery</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
             
              <a href="{{url('gallery/screenshot')}}"><li  class="top-label">Screenshot</li></a>
              <a href="{{url('gallery/Video')}}"><li class="top-label">video</li></a>
              <a href="{{url('/gallery/customer_testimonies')}}"><li class="top-label"> Customer testimonies</li></a>
              
            </ul>
          </div>
        </div>
        <div class="container col-md-12">
     
       
          <!-- <img src="#" class="img-responsive imggallery"> -->
         
       
      

      </div>
</div>
    </section><!-- End Contact Section -->
@endsection
