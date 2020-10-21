@extends('layouts.app')

@section('content')



  <main id="main">

    <div class="signup-form">
     <form method="POST" action="{{ route('register') }}">
        @csrf
    <h2>Register</h2>
    <p class="hint-text">Create your account.</p>
   

        <div class="form-group">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" autocomplete="name" autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
    <div class="form-group">
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
    <div class="form-group">
             <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="{{ __('Confirm Password') }}" autocomplete="new-password">
        </div>  


             
        <div class="form-group">
      <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
    </form>
  
</div>

  

    
   

 
  </main><!-- End #main -->









@endsection