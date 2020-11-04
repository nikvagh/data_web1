@extends('layouts.new_pro') @section('content')

<!-- inner-page-banner-section start -->

<section class="inner-page-banner-section gradient-bg">
    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/contact.png') }}" alt="image-illustration" /></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="inner-page-content-area">
                    <h2 class="page-title">Charity</h2>

                    <nav aria-label="breadcrumb" class="page-header-breadcrumb"></nav>
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

                        <h2 class="section-title">Charity</h2>

                        <!-- <p>Have questions? We don't bite! Just shoot us a message and we'll get back to you as soon as possible!</p> -->
                    </div>
                </div>

                <div class="col-lg-12 contact-form-wrapper">
                    @if(session()->get('success'))
                    <div class="alert alert-success" id="msg" role="alert">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <form method="post" class="form" action="{{ route('Charity') }}">
                        @csrf

                        <div class="row">
                            <div class="col-lg-7 login-box">
                                <input type="text" id="charity_name" class="input-text" name="name" placeholder="Charity Name" required="required" />
                                @error('name')
                                <small class="form-text text-left text-danger"> {{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-lg-7 login-box">
                                <input type="text" name="CEO_details" class="input-text" placeholder="CEO Details" id="CEO_details" value="{{ old('CEO_details') }}" />
                                @error('CEO_details')
                                <small class="form-text text-left text-danger"> {{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-lg-7 login-box">
                                <textarea name="address" placeholder="Charity Addresss" class="input-text" id="address">{{ old('address') }}</textarea>

                                @error('address')
                                <small class="form-text text-left text-danger"> {{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-lg-7 login-box">
                                <input type="text" name="business_registration" class="input-text" placeholder="Business Registration" id="business_registration" value="{{ old('business_registration') }}" />
                                @error('business_registration')
                                <small class="form-text text-left text-danger"> {{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-lg-7 login-box">
                                <textarea name="need_funding" class="input-text" placeholder="Why need funding" id="need_funding">{{ old('need_funding') }}</textarea>

                                @error('need_funding')
                                <small class="form-text text-left text-danger"> {{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-lg-7 login-box">
                                <input type="text" name="CEO_details" class="input-text" placeholder="CEO Details" id="CEO_details" value="{{ old('CEO_details') }}" />
                                @error('CEO_details')
                                <small class="form-text text-left text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="appending_div"></div>

                        @if($errors->all())
                        <?php
                            $Member_names= old('Member_names');
                         ?>
                        @foreach($Member_names as $value)
                        <div class="col-lg-7 login-box">
                            <input type="text" name="Member_names[]" class="input-text" placeholder="Member Names" id="Member_names" value="{{$value}}" />
                        </div>

                        @endforeach
                        <div class="col-lg-7 login-box">
                            <i class="icofont-plus btn btn-primary add" style="display: inline;">+</i>
                        </div>

                        @else

                        <div class="col-lg-7 login-box">
                            <input type="text" name="Member_names[]" placeholder="Member Names"  id="Member_names" value="" /><br />
                            <i class="icofont-plus btn btn-primary add" style="display: inline;">+</i>
                            @error('Member_names[]')
                            <small class="form-text text-left text-danger"> {{ $message }}</small>
                        </div>
                        @enderror
                        <!-- <div class="appending_div"></div> -->

                        @endif

                        <div class="col-md-7 login-box">
                            <div><label class="form-check-label"> Background Check</label></div>

                            <input type="checkbox" value="yes" name="background_check" class="form-check-inline" /><label class="form-check-label">Yes</label>

                            <input type="checkbox" value="no" name="background_check" class="form-check-inline" /><label class="form-check-label"> No </label>@error('background_check')
                            <small class="form-text text-left text-danger"> The Back ground check will be carried out by local police and local representative field is required.</small>
                            @enderror
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn btn-primary text-center">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
        @endsection @section('js')
        <script type="text/javascript">
            $(document).ready(function () {
                $(".add").on("click", function () {
                    var field = ' <div class="col-lg-7 login-box"><input type="text" name="Member_names[]" placeholder="Member Names" id="Member_names"  /></div>';
                    $(".appending_div").append(field);
                });
            });
        </script>

        @endsection
