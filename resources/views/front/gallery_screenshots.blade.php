@extends('layouts.front')
@section('css')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css">
@endsection
@section('Breadcrumbs')
<section class="breadcrumbs">

      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Gallery </h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
             <li>Gallery</li>  

          </ol>
        </div>
      </div>

    </section><!-- End Breadcrumbs -->
@endsection
 @section('content')
    
 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact white-bg">
<div class="container" data-aos="fade-up">
  <div class="container aos-init aos-animate" data-aos="fade-up">
  <div class="section-title">
          
          <h3>Trading screen shot </h3>
         <!--  <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
             
             
           
              
            </ul>
          </div>
        <div class="container col-md-12">
     
          @foreach ($data as $key)
         
          <a href="{{ asset('/uploads/Videos/').'/'.$key->video }}" data-lightbox='{{$key->video}}' ><img src="{{ asset('/uploads/Videos/thumb/').'/'.'300X300_'.$key->video }}" class="img-responsive imggallery"></a>
      
          @endforeach
       
      

      </div>
</div>
    </section><!-- End Contact Section -->
     <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact ">
<div class="container" data-aos="fade-up">
  <div class="container aos-init aos-animate" data-aos="fade-up">

          <div class="section-title">
        
          <h3>Trading videos recording </h3>
       <!--    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
             
             
            
            </ul>
          </div>
        <div class="container col-md-12">
     
          @foreach ($video as $key)

 <a href="{{ asset('/uploads/Videos/').'/'.$key->video }}" data-lightbox='image-1' ><video src="{{ asset('/uploads/Videos/').'/'.$key->video }}" controls class="imggallery"></video></a>

</video>
          <!-- <video src="{{ asset('/uploads/Videos/').'/'.$key->video }}" class=" imggallery"></video> -->
          @endforeach
       
      

      </div>
</div>
    </section><!-- End Contact Section -->


 <!-- ======= Testimonials Section ======= -->
          <div class="section-title">
        
          <h3>Customer testimonies </h3>
       <!--    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>
    <section id="testimonials" class="testimonials topsp">
      <div class="container" data-aos="zoom-in">
        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="{{asset('front_asset/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{asset('front_asset/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{asset('front_asset/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{asset('front_asset/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{asset('front_asset/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

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