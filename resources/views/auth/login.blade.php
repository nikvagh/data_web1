@extends('layouts.app')

@section('content')





  <main id="main">

  <div class="signup-form">
        <form method="POST" action="{{ route('login') }}">
                  @csrf
            <h2>Auto Unit</h2>
            <p class="hint-text">Login your account.</p>
                <div class="form-group">
      
       

        
        <div class="form-group">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
           @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    <div class="form-group">
           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" autocomplete="current-password">
             @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
      <label class="form-check-label"> <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}</label>
    </div>
    <div class="form-group">
            
            <button type="submit" class="btn btn-success btn-lg btn-block">Login Now</button>
             @if (Route::has('password.request'))
        <a class="" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
             <a href="{{ route('customer_register') }}" class="text-center">Register a new membership</a>
        </div>
    </form>
  
</div>

 
  </main><!-- End #main -->

  








@endsection