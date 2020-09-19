@extends('layouts.front')

@section('content')
    <form method="post" action="{{ route('agent_register_save') }}">
        {{ csrf_field() }}
        <label>Business Name</label>
        <input type="text" name="business_name" id="business_name" value="{{ old('business_name') }}"/>
        @if ($errors->has('business_name')) <em class="error">{{ $errors->first('business_name') }}</em> @endif

        <label>ABN</label>
        <input type="text" name="abn" id="abn" value="{{ old('abn') }}"/>
        @if ($errors->has('abn')) <em class="error">{{ $errors->first('abn') }}</em> @endif

        <label>Type Of Industry</label>
        <input type="text" name="type_of_industry" id="type_of_industry" value="{{ old('type_of_industry') }}" />
        @if ($errors->has('type_of_industry')) <em class="error">{{ $errors->first('type_of_industry') }}</em> @endif

        <label>Phone</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"/>
        @if ($errors->has('phone')) <em class="error">{{ $errors->first('phone') }}</em> @endif

        <label>Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}"/>
        @if ($errors->has('email')) <em class="error">{{ $errors->first('email') }}</em> @endif
        
        <label>Password</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}"/>
        @if ($errors->has('password')) <em class="error">{{ $errors->first('password') }}</em> @endif

        <input type="submit" name="submit" value="submit"/>
    </form>
@endsection