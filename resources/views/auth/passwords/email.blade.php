@extends('layouts.app')

@section('content')





  <!-- inner-page-banner-section start -->

  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/contact.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">

                    <h2 class="page-title">Reset Password</h2>

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

              <h2 class="section-title">Reset Password</h2>

              <!-- <p>Have questions? We don't bite! Just shoot us a message and we'll get back to you as soon as possible!</p> -->

            </div>

          </div>

          <div class="col-lg-12 contact-form-wrapper">
            <form method="POST" action="{{ route('password.email') }}">
       
                  @csrf
                         @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

              <div class="row">

                <div class="col-lg-7 login-box">

                 <input id="email" type="email" placeholder="E-Mail Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                </div>


                <div class="col-lg-12 text-center">

                  <button type="submit" class="btn btn-primary text-center"> {{ __('Send Password Reset Link') }}</button>

                </div>
                
              </div>

            </form>

            <p class="form-message"></p>

          </div>

        </div>

      </div>



<!-- ------------------------------------------------------------------------------ -->




@endsection
