@extends('layouts.new_pro')

 @section('content')
 

  <!-- inner-page-banner-section start -->

  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/contact.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">

                    <h2 class="page-title">Contact Us</h2>

                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="home-one.html">Home</a></li>

                            <li class="breadcrumb-item">Contact</li>

                        </ol>

                    </nav>

                </div>

            </div>

        </div>

    </div>

  </section>

  <!-- inner-page-banner-section end -->



  <section class="contact-section mt-minus pb-120 ">

    <div class="container ">

      <div class="contact-form-area">

        <div class="row justify-content-center">

          <div class="col-lg-7">

            <div class="section-header text-center">

              <span class="section-subtitle">Contact</span>

              <h2 class="section-title">Get In Touch</h2>

              <p>Have questions? We don't bite! Just shoot us a message and we'll get back to you as soon as possible!</p>

            </div>

          </div>

          <div class="col-lg-12 contact-form-wrapper ">

                <form action="{{ route('contact_us') }}" method="post"  class="form">   @csrf
                  
                @if(session()->get('success'))
                      <div class="alert alert-success" id="msg" role="alert">
                     {{ session()->get('success') }} 
                    </div>
                  @endif

                  
              <div class="row">

                <div class="col-lg-6">

                <input type="text" name="name" id="name" placeholder="Your Name*" class="contect-input" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   @error('name')<div align="left" class="text-danger"> <em class="error"> {{ $message }}</em></div> @enderror

                </div>

              

                <div class="col-lg-6">

                    <input type="email" name="email" id="email" placeholder="Your Email*" class="contect-input" data-rule="email" data-msg="Please enter a valid email" />
                   @error('email')<div align="left" class="text-danger"> <em class="error"> {{ $message }}</em></div> @enderror

                </div>

                <div class="col-lg-12">

                 <input type="text" name="subject" id="subject" placeholder="Subject*" class="contect-input" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                   @error('subject')<div align="left" class="text-danger"> <em class="error"> {{ $message }}</em></div> @enderror

                </div>

                <div class="col-lg-12">

                   <textarea name="message" rows="5" data-rule="required" class="contect-input" data-msg="Please write something for us" placeholder="Message *"></textarea>
                   @error('message')<div align="left" class="text-danger"> <em class="error"> {{ $message }}</em></div> @enderror

                </div>

                <div class="col-lg-12 text-center">

                  <button type="submit" class="btn btn-primary" title="Submit Your Message!">submit now</button>

                </div>

              </div>

            </form>

            <p class="form-message"></p>

          </div>

        </div>

      </div>

      <div class="social-links-area pt-120"> 

        <div class="row justify-content-center">

          <div class="col-lg-9">

            <div class="section-header text-center">

              <span class="section-subtitle">Join The Conversation!</span>

              <h2 class="section-title">Browse Our Social Pages</h2>

            </div>

          </div>

        </div>

        <div class="row mb-none-30"> 

          <div class="col-lg-3 col-sm-6">

            <div class="social-media-item text-center mb-30">

              <div class="icon"> 

                <i class="fa fa-facebook-f"></i>

              </div>

              <div class="content">

                <h3 class="counter">32,334</h3>

                <p>facebook members</p>

                <a href="#0" class="join-btn">join!</a>

              </div>

            </div>

          </div><!-- social-media-item end-->

          <div class="col-lg-3 col-sm-6">

            <div class="social-media-item text-center mb-30">

              <div class="icon"> 

                <i class="fa fa-twitter"></i>

              </div>

              <div class="content">

                <h3 class="counter">32,334</h3>

                <p>Twitter followers</p>

                <a href="#0" class="join-btn">join!</a>

              </div>

            </div>

          </div><!-- social-media-item end-->

          <div class="col-lg-3 col-sm-6">

            <div class="social-media-item text-center mb-30">

              <div class="icon"> 

                <i class="fa fa-instagram"></i>

              </div>

              <div class="content">

                <h3 class="counter">20,150</h3>

                <p>Instagram subscribers</p>

                <a href="#0" class="join-btn">join!</a>

              </div>

            </div>

          </div><!-- social-media-item end-->

          <div class="col-lg-3 col-sm-6">

            <div class="social-media-item text-center mb-30">

              <div class="icon"> 

                <i class="fa fa-paper-plane-o"></i>

              </div>

              <div class="content">

                <h3 class="counter">30,334</h3>

                <p>Telegram members</p>

                <a href="#0" class="join-btn">join!</a>

              </div>

            </div>

          </div><!-- social-media-item end-->

        </div>

      </div>

    </div>

  </section>
















 <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact white-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <h2>Contact</h2>
         
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>{{$settings->address}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>{{$settings->Email}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>{{$settings->mobile_number}}</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">


          <iframe frameborder="0" style="border:0; width: 100%; height: 384px;" src="https://www.google.com/maps/embed/v1/place?q={{$settings->map_ip1}},{{$settings->map_ip2}}&amp;key={{$settings->map_key}}" allowfullscreen></iframe>



          </div>

          <div class="col-lg-6">
        
                  
              <div class="form-row">
                <div class="col form-group">
              
                </div>
                <div class="col form-group">
                 

                </div>
              </div>
              <div class="form-group">
               
                
              </div>
              <div class="form-group">
               
                
              </div>
             
              <div class="text-center"><button type="submit" name="submit" class="btn btn-primary">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section> --><!-- End Contact Section -->
@endsection
