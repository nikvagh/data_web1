@extends('layouts.app')

@section('content')






  <main id="main">

  <div class="signup-form">
                    <form method="POST" action="{{ route('password.email') }}">
       
                  @csrf
            <h2>Auto Unit</h2>
            <p class="hint-text">{{ __('Reset Password') }}.</p>
                <div class="form-group">
      
       
                         @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        
        <div class="form-group">
           <input id="email" type="email" placeholder="E-Mail Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
    
        
    <div class="form-group">
            
            <button type="submit" class="btn btn-success btn-lg btn-block"> {{ __('Send Password Reset Link') }}</button>
           
        </div>
    </form>
  
</div>

 
  </main><!-- End #main -->

  


@endsection
