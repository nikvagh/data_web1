@extends('layouts.front')
 @section('Breadcrumbs')
<section class="breadcrumbs">

      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact Us </h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
             <li>Contact Us</li>  

          </ol>
        </div>
      </div>

    </section><!-- End Breadcrumbs -->
@endsection
 @section('content')
 
 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact white-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
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
            <form action="{{ route('contact_us') }}" method="post"  class="form">   @csrf
                  
                @if(session()->get('success'))
                      <div class="alert alert-success" id="msg" role="alert">
                     {{ session()->get('success') }} 
                    </div>
                  @endif
                  
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   @error('name')<div align="left" class="text-danger"> <em class="error"> {{ $message }}</em></div> @enderror
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                   @error('email')<div align="left" class="text-danger"> <em class="error"> {{ $message }}</em></div> @enderror

                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                   @error('subject')<div align="left" class="text-danger"> <em class="error"> {{ $message }}</em></div> @enderror
                
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                   @error('message')<div align="left" class="text-danger"> <em class="error"> {{ $message }}</em></div> @enderror
                
              </div>
             
              <div class="text-center"><button type="submit" name="submit" class="btn btn-primary">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@endsection
