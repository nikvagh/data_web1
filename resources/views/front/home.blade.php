@extends('layouts.new')
 @section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('back_asset/img/slide/banner2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Auto Unit</span></h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('back_asset/img/slide/banner2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Auto Unit</h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('back_asset/img/slide/banner2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Auto Unit</h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>INVESTMENT PLANS</h2>
        </div>

        <div class="row">
          @foreach ($products as $key)
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
         <a href="{{ url('product_details',$key->id) }}">  <button type="button"  id="button5"  value="$5000 INVESTMENT PLAN">{{ $key->amount }} <br>{{ $key->name }}</button></a>
          </div>
         @endforeach

      </div>
    </section><!-- End Services Section -->




    
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>OUR PAYMENTS</h2>

          <img src="{{ url('back_asset/img/slide/icon1.png') }}">
           <img src="{{ url('back_asset/img/slide/icon2.png') }}">
            <img src="{{ url('back_asset/img/slide/icon3.png') }}">
             <img src="{{ url('back_asset/img/slide/icon4.png') }}">
              <img src="{{ url('back_asset/img/slide/icon5.png') }}">
               <img src="{{ url('back_asset/img/slide/icon6.png') }}">
                <img src="{{ url('back_asset/img/slide/icon7.png') }}">
                 <img src="{{ url('back_asset/img/slide/icon8.png') }}">
                  <img src="{{ url('back_asset/img/slide/icon9.png') }}">

        </div>

       

      </div>
    </section><!-- End Services Section -->

   

 
  </main><!-- End #main -->



@endsection