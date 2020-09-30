
@extends('layouts.front')
 @section('Breadcrumbs')
<section class="breadcrumbs">

      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Customer Register </h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
             <li>Customer Register</li>  

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
                         <form method="post"  class="form"action="{{ route('customer_register_save') }}">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group fullwith">
                                <input type="text" name="name" placeholder="Name" id="name" class="form-control" value="{{ old('name') }}" />
                               
                                @if ($errors->has('name'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('name') }}</em></div> @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group fullwith">
                                <input type="text" name="phone" placeholder="Phone" id="phone" class="form-control" value="{{ old('phone') }}" />
                                @if ($errors->has('phone')) <div align="left" class="text-danger"><em class="error">{{ $errors->first('phone') }}</em></div> @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group fullwith">
                                <input type="text" name="email" placeholder="Email" id="email" class="form-control" value="{{ old('email') }}" />
                                @if ($errors->has('email')) <div align="left" class="text-danger"><em class="error">{{ $errors->first('email') }}</em></div> @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group fullwith">
                                <input type="password" name="password" placeholder="Password" class="form-control" id="password" value="{{ old('password') }}" />
                                @if ($errors->has('password'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('password') }}</em> </div>@endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  fullwith">
                                <input type="text" name="abn" placeholder="ABN" class="form-control" id="abn" value="{{ old('abn') }}" />
                                @if ($errors->has('abn'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('abn') }}</em> </div>@endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group fullwith">
                                <textarea name="address" placeholder="Address" class="form-control" id="address" >{{ old('address') }}</textarea> 
                                @if ($errors->has('address'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('address') }}</em></div> @endif
                            </div>
                        </div>

                        <input type="hidden" name="agent_id" value="{{ old('agent_id',$agent_id) }}" />

                        <div class="text-center"><button name="submit" class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
        @endsection


