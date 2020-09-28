@extends('layouts.front') @section('content')

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing section-bg">
    <div class="container" data-aos="fade-up">
        <form name="checkout" method="post" action="{{url('order_user')}}" enctype="multipart/form-data">@csrf
            <div class="col2-set" id="customer_details">
                <div class="col-md-10">
                    <div class="woocommerce-billing-fields">
                        <h3>Billing details</h3>
                        <input type="hidden" name="id" value="{{$id}}">
                        <div class="woocommerce-billing-fields__field-wrapper">
                          <div class="flex">
                            <div class="form-group with50">
                                <label for="fname" class="">First name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="First name" value="{{ old('fname') }}" autocomplete="given-name" />
                             @error('fname')
                            <small class=" form-text text-danger"> {{ $message }}</small>
                            @enderror
                            </div>

                            <div class="form-group with50">
                                <label for="lname" class="">Last name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name" value="{{ old('lname') }}" autocomplete="family-name" />
                             @error('lname')
                            <small class=" form-text text-danger"> {{ $message }}</small>
                            @enderror
                            </div>
                          </div>
                            <div class="form-group">
                                <label for="country" class="">Country&nbsp;<abbr class="required" title="required">*</abbr></label>

                                <select name="country" id="country" class="form-control" autocomplete="country">
                                    <option value="">Select a country&hellip;</option>
                                    @foreach($country as $valu)
                                    <option value="{{$valu->id}}">{{$valu->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                             @error('country')
                            <small class=" form-text text-danger"> {{ $message }}</small>
                            @enderror

                            <div class="form-group">
                                <label for="billing_address_1" class="">Street address&nbsp;<abbr class="required" title="required">*</abbr></label>
                               <textarea class="form-control" name="address" placeholder="Street Address">{{ old('address') }}</textarea>
                            </div>
                             @error('address')
                            <small class=" form-text text-danger"> {{ $message }}</small>
                            @enderror

                            <div class="form-group">
                                <label for="State" class="">State / County&nbsp;<abbr class="required" title="required">*</abbr></label>
                                 <input type="text" class="form-control" name="State" id="State" placeholder="State / County" value="{{ old('State') }}" autocomplete="address-level2" />
                                </div>
                             @error('State')
                                <small class=" form-text text-danger"> {{ $message }}</small>
                                @enderror
                            <div class="form-group">
                                <label for="City" class="">Town / City&nbsp;<abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control" name="City" id="City" placeholder="Town / City" value="{{ old('City') }}" autocomplete="address-level2" />
                            </div>
                                @error('City')
                                <small class=" form-text text-danger"> {{ $message }}</small>
                                @enderror

                            <div class="form-group">
                                <label for="Postcode/ZIP" class="">Postcode / ZIP&nbsp;<abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control" name="Postcode/ZIP" id="Postcode/ZIP" placeholder="Postcode / ZIP" value="{{ old('Postcode/ZIP') }}" autocomplete="postal-code" />
                            </div>
                             @error('Postcode/ZIP')
                                <small class=" form-text text-danger"> {{ $message }}</small>
                                @enderror

                            <div iv class="form-group">
                                <label for="Phone" class="">Phone&nbsp;<abbr class="required" title="required">*</abbr></label>
                                <input type="tel" class="form-control" name="Phone" id="Phone" placeholder="Phone" value="{{ old('Phone') }}" autocomplete="tel" />
                            </div>
                             @error('Phone')
                                <small class=" form-text text-danger"> {{ $message }}</small>
                                @enderror

                            <div class="form-group">
                                <label for="email" class="">Email address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email address" value="{{ old('email') }}" autocomplete="email username" />
                            </div>
                             @error('email')
                                <small class=" form-text text-danger"> {{ $message }}</small>
                                @enderror
                        </div>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary" />
                </div>

               
            </div>
        </form>
    </div>
</section>
 @endsection
