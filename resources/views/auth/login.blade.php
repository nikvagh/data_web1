@extends('layouts.app')

@section('content')



  <!-- inner-page-banner-section start -->

  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/contact.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">

                    <h2 class="page-title">Login</h2>

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

              <h2 class="section-title">Login</h2>

              <!-- <p>Have questions? We don't bite! Just shoot us a message and we'll get back to you as soon as possible!</p> -->

            </div>

          </div>

          <div class="col-lg-12 contact-form-wrapper">

           <form method="POST" action="{{ route('login') }}">
                  @csrf

              <div class="row">

                <div class="col-lg-7 login-box">

                 <input id="email" type="email"  placeholder="{{ __('E-Mail Address') }}" class="input-text" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
           @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


                </div>

                <div class="col-lg-7 login-box">

                   <input id="password" type="password" placeholder="{{ __('Password') }}" class="input-text" name="password" autocomplete="current-password">
             @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

                </div>
<div class="col-md-7 login-box">
   
      <label class="form-check-label"> <input  type="checkbox" name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}</label>
   
</div>
                <div class="col-lg-12 text-center">

                  <button type="submit" class="btn btn-primary text-center">Login Now</button>

                </div>
                <div class="col-lg-12 text-center">

                  @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
           &nbsp;&nbsp;  <a href="{{ route('customer_register') }}" class="text-center">Register a new membership</a>
</div>
              </div>

            </form>

            <p class="form-message"></p>

          </div>

        </div>

      </div>




@endsection