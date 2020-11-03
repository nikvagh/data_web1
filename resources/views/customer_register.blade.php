

@extends('layouts.new')

 @section('content')



  <main id="main">

    <div class="signup-form">
     <form method="post"  class="form"action="{{ route('customer_register_save') }}">
                        {{ csrf_field() }}
    <h2>Register</h2>
    <p class="hint-text">Create your account.</p>
    

        <div class="form-group">
          <input type="text" name="name" placeholder="Name" id="name" class="form-control" value="{{ old('name') }}" />
                               
            @if ($errors->has('name'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('name') }}</em></div> @endif
        </div>
        <div class="form-group">
           <input type="text" name="phone" placeholder="Phone" id="phone" class="form-control" value="{{ old('phone') }}" />
            @if ($errors->has('phone')) <div align="left" class="text-danger"><em class="error">{{ $errors->first('phone') }}</em></div> @endif
        </div>
    <div class="form-group">
           <input type="text" name="email" placeholder="Email" id="email" class="form-control" value="{{ old('email') }}" />
            @if ($errors->has('email')) <div align="left" class="text-danger"><em class="error">{{ $errors->first('email') }}</em></div> @endif
        </div>
    <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control" id="password" value="{{ old('password') }}" />
            @if ($errors->has('password'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('password') }}</em> </div>@endif
        </div>  

        <div class="form-group">
           <input type="text" name="abn" placeholder="ABN" class="form-control" id="abn" value="{{ old('abn') }}" />
           @if ($errors->has('abn'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('abn') }}</em> </div>@endif
        </div>

         <div class="form-group">
          <textarea name="address" placeholder="Address" class="form-control" id="address" >{{ old('address') }}</textarea> 
            @if ($errors->has('address'))<div align="left" class="text-danger"> <em class="error">{{ $errors->first('address') }}</em></div> @endif
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


