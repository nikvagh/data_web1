

@extends('layouts.app')

 @section('content')




  <!-- inner-page-banner-section start -->

  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/contact.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">

                    <h2 class="page-title">Register</h2>

                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">

                    
                    </nav>

                </div>

            </div>

        </div>

    </div>

  </section>

  <!-- inner-page-banner-section end -->



  <section class="contact-section mt-minus pb-120">

    <div class="container">

      <div class="contact-form-area">

        <div class="row justify-content-center">

          <div class="col-lg-7">

            <div class="section-header text-center">

              <span class="section-subtitle">Auto</span>

              <h2 class="section-title">Register</h2>

              <!-- <p>Have questions? We don't bite! Just shoot us a message and we'll get back to you as soon as possible!</p> -->

            </div>

          </div>

          <div class="col-lg-12 contact-form-wrapper">

            <form method="post"  class="form"action="{{ route('customer_register_save') }}">
                  @csrf

              <div class="row">

                <div class="col-lg-7 login-box">

               <input type="text" name="name" placeholder="Name" id="name"  value="{{ old('name') }}" />
                               
            @if ($errors->has('name'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('name') }}</em></div> @endif

                </div>

                <div class="col-lg-7 login-box">
                  <input type="text" name="phone" placeholder="Phone" id="phone"  value="{{ old('phone') }}" />
            @if ($errors->has('phone')) <div align="left" class="text-danger"><em class="error">{{ $errors->first('phone') }}</em></div> @endif

                </div>
                  <div class="col-lg-7 login-box">
                 <input type="text" name="email" placeholder="Email" id="email"  value="{{ old('email') }}" />
            @if ($errors->has('email')) <div align="left" class="text-danger"><em class="error">{{ $errors->first('email') }}</em></div> @endif

                </div>
                <div class="col-lg-7 login-box">
                <input type="password" name="password" placeholder="Password"  id="password" value="{{ old('password') }}" />
            @if ($errors->has('password'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('password') }}</em> </div>@endif

                </div>
                <div class="col-lg-7 login-box">
                <input type="text" name="abn" placeholder="ABN"  id="abn" value="{{ old('abn') }}" />
           @if ($errors->has('abn'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('abn') }}</em> </div>@endif

                </div>
                 <div class="col-lg-7 login-box">
               <textarea name="address" placeholder="Address"  id="address" >{{ old('address') }}</textarea> 
            @if ($errors->has('address'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('address') }}</em></div> @endif

                </div>
<div class="col-md-7 login-box">
   
     <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
   
</div>
                <div class="col-lg-12 text-center">

                  <button type="submit" class="btn btn-primary">Register Now</button>

                </div>
              

            </form>

            

          </div>

        </div>

      </div>



        @endsection


