@extends('layouts.new')

@section('content')
      <main id="main">

    <div class="signup-form">
      <form method="post"  class="form"action="{{ route('agent_register_save') }}">
                        {{ csrf_field() }}
    <h2>Register</h2>
    <p class="hint-text">Create your account.</p>


        <div class="form-group">
         <input type="text" name="business_name" class="form-control" placeholder="Business Name" id="business_name" value="{{ old('business_name') }}"/>
          @if ($errors->has('business_name'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('business_name') }}</em></div> @endif
        </div>
        <div class="form-group">
         <input type="text" name="abn" placeholder="abn" id="abn" class="form-control" value="{{ old('abn') }}" />
        @if ($errors->has('abn')) <div align="left" class="text-danger"><em class="error">{{ $errors->first('abn') }}</em></div> @endif
        </div>
    <div class="form-group">
         <input type="text" name="type_of_industry" placeholder="Type Of Industry" id="type_of_industry" class="form-control" value="{{ old('type_of_industry') }}" />
         @if ($errors->has('type_of_industry')) <div align="left" class="text-danger"><em class="error">{{ $errors->first('type_of_industry') }}</em></div> @endif
        </div>
    <div class="form-group">
            <input type="text" name="phone" placeholder="phone" class="form-control" id="phone" value="{{ old('phone') }}" />
            @if ($errors->has('phone'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('phone') }}</em> </div>@endif
        </div>  

        <div class="form-group">
          <input type="text" name="email" placeholder="email" class="form-control" id="email" value="{{ old('email') }}" />
           @if ($errors->has('email'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('email') }}</em> </div>@endif
        </div>

         <div class="form-group">
          <input type="password" name="password" placeholder="password" class="form-control" id="password" value="{{ old('password') }}" />
         @if ($errors->has('password'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('password') }}</em> </div>@endif
        </div>        
        <div class="form-group">
      <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
  
</div>
  </main><!-- End #main -->













  
@endsection