@extends('layouts.front')
 @section('Breadcrumbs')
<section class="breadcrumbs">

      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Agent Register </h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
             <li>Agent Register</li>  

          </ol>
        </div>
      </div>

    </section><!-- End Breadcrumbs -->
@endsection
@section('content')
    
<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing white-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <div class="col-lg-6">
                <div class="contact">
                         <form method="post"  class="form"action="{{ route('agent_register_save') }}">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group fullwith">
                                <input type="text" name="business_name" class="form-control" placeholder="Business Name" id="business_name" value="{{ old('business_name') }}"/>
                          @if ($errors->has('business_name'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('business_name') }}</em></div> @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group fullwith">
                                <input type="text" name="abn" placeholder="abn" id="abn" class="form-control" value="{{ old('abn') }}" />
                                @if ($errors->has('abn')) <div align="left" class="text-danger"><em class="error">{{ $errors->first('abn') }}</em></div> @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group fullwith">
                                <input type="text" name="type_of_industry" placeholder="Type Of Industry" id="type_of_industry" class="form-control" value="{{ old('type_of_industry') }}" />
                                @if ($errors->has('type_of_industry')) <div align="left" class="text-danger"><em class="error">{{ $errors->first('type_of_industry') }}</em></div> @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group fullwith">
                                <input type="text" name="phone" placeholder="phone" class="form-control" id="phone" value="{{ old('phone') }}" />
                                @if ($errors->has('phone'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('phone') }}</em> </div>@endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  fullwith">
                                <input type="text" name="email" placeholder="email" class="form-control" id="email" value="{{ old('email') }}" />
                                @if ($errors->has('email'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('email') }}</em> </div>@endif
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="form-group  fullwith">
                                <input type="password" name="password" placeholder="password" class="form-control" id="password" value="{{ old('password') }}" />
                                @if ($errors->has('password'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('password') }}</em> </div>@endif
                            </div>
                        </div>

             

                        <div class="text-center"><button name="submit" class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection