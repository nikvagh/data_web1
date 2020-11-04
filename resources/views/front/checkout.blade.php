@extends('layouts.new_pro')

 @section('content')


  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/contact.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">

                    <h2 class="page-title">checkout</h2>

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

              <span class="section-subtitle">checkout</span>

              <!-- <h2 class="section-title">Billing Details</h2> -->

              <!-- <p>Have questions? We don't bite! Just shoot us a message and we'll get back to you as soon as possible!</p> -->

            </div>

          </div>

          <div class="col-lg-12 contact-form-wrapper">

           <form name="checkout" method="post" action="{{url('checkout')}}" enctype="multipart/form-data">@csrf
                  
                 @if (Session::has('message_e'))
        @include('partials.alert', ['type' => "danger",'message'=> Session::get('message_e') ])
        @endif

                  
              <div class="row">

                <div class="col-lg-6">

                                <input type="text" class="contect-input"  name="fname" id="fname" placeholder="First name*" value="@if(old('fname')){{ old('fname') }}@else{{Auth::user()->name}}@endif" autocomplete="given-name" />
                             @error('fname')
                            <small class=" form-text text-danger"> {{ $message }}</small>
                            @enderror

                </div>

              

                <div class="col-lg-6">

                    <input type="text" class="contect-input" name="lname"  id="lname" placeholder="Last name" value="{{ old('lname') }}" autocomplete="family-name" />
                             @error('lname')
                            <small class=" form-text text-danger"> {{ $message }}</small>
                            @enderror

                </div>

                <div class="col-lg-12">

                 <textarea class="contect-input" name="address"  placeholder="Street Address">{{ old('address') }}</textarea>
                           
                             @error('address')
                            <small class=" form-text text-danger"> {{ $message }}</small>
                            @enderror

                </div>

                <div class="col-lg-12">

                    <select name="country" id="country" class="contect-input form-control" autocomplete="country">
                                    <option value="">Select a country&hellip;</option>
                                    @foreach($country as $valu)
                                    @if(old('country')==$valu->id)
                                    <option value="{{$valu->id}}" selected>{{$valu->name}}</option>

                                    @else
                                   
                                     <option value="{{$valu->id}}">{{$valu->name}}</option>
                                     @endif
                                    @endforeach
                                </select>
                           
                             @error('country')
                            <small class=" form-text text-danger"> {{ $message }}</small>
                            @enderror

                </div>


                <div class="col-lg-12">
               <input type="text" class="contect-input" name="State" id="State" placeholder="State / County" value="{{ old('State') }}" autocomplete="address-level2" />
                               
                             @error('State')
                                <small class=" form-text text-danger"> {{ $message }}</small>
                                @enderror

                </div>

                    <div class="col-lg-12">
               <input type="text" class="contect-input" name="City" id="City" placeholder="Town / City" value="{{ old('City') }}" autocomplete="address-level2" />
                            
                                @error('City')
                                <small class=" form-text text-danger"> {{ $message }}</small>
                                @enderror

                </div>


                    <div class="col-lg-12">
               <input type="text" class="contect-input" name="Postcode/ZIP" id="Postcode/ZIP" placeholder="Postcode / ZIP" value="{{ old('Postcode/ZIP') }}" autocomplete="postal-code" />
                            
                             @error('Postcode/ZIP')
                                <small class=" form-text text-danger"> {{ $message }}</small>
                                @enderror

                </div>

                                    <div class="col-lg-12">
               <input type="number" class="contect-input" name="Phone" id="Phone" placeholder="Phone" value="@if(old('Phone')){{ old('Phone') }}@else{{Auth::user()->phone}}@endif" autocomplete="tel" />
                          
                             @error('Phone')
                                <small class=" form-text text-danger"> {{ $message }}</small>
                                @enderror

                </div>

                                    <div class="col-lg-12">
               <input type="email" class="contect-input" name="email" id="email" placeholder="Email address" value="@if(old('email')){{ old('email') }}@else{{Auth::user()->email}}@endif" autocomplete="email username" />
                            
                             @error('email')
                                <small class=" form-text text-danger"> {{ $message }}</small>
                                @enderror

                </div>

                                    <div class="col-lg-12">
               <input type="text" class="contect-input" name="State" id="State" placeholder="State / County" value="{{ old('State') }}" autocomplete="address-level2" />
                                </div>
                             @error('State')
                                <small class=" form-text text-danger"> {{ $message }}</small>
                                @enderror

                </div>

                                    <div class="col-lg-12">
                                       <label for="email" >Payment Meaning&nbsp;</label>

                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="Payment_Meaning" id="exampleRadios1" value="Wallet_{{ $payment->wallet }}">
                                <label class="form-check-label" for="exampleRadios1">Wallet (Available Balance : {{ $payment->wallet }})</label>
                                </div>

                               <div class="form-check">
                                <input class="form-check-input" type="radio" name="Payment_Meaning" id="exampleRadios1" value="Polipay">
                                <label class="form-check-label" for="exampleRadios1">Polipay</label>
                               </div>

                               <div class="form-check">
                                <input class="form-check-input" type="radio" name="Payment_Meaning" id="exampleRadios1" value="Paypal">
                                <label class="form-check-label" for="exampleRadios1">Paypal</label>
                               </div>

                                @error('Payment_Meaning')
                                <small class=" form-text text-danger"> {{ $message }}</small>
                                @enderror
                                    </div>

                <div class="col-lg-12 text-center">

                    <input type="hidden" name="total" value="{{ Cart::session(Auth::user()->id)->getSubTotal() }}">

                    <input type="submit" name="submit" class="btn btn-primary" />

                </div>

              </div>

            </form>

            <p class="form-message"></p>

          </div>

        </div>

      </div>



    </div>

  </section>




<!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->



 @endsection
