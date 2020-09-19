@extends('layouts.front')

@section('content')
    <form method="post" action="{{ route('customer_register_save') }}">
        {{ csrf_field() }}
        <label>Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}"/>
        @if ($errors->has('name')) <em class="error">{{ $errors->first('name') }}</em> @endif

        <label>Phone</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"/>
        @if ($errors->has('phone')) <em class="error">{{ $errors->first('phone') }}</em> @endif

        <label>Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}"/>
        @if ($errors->has('email')) <em class="error">{{ $errors->first('email') }}</em> @endif
        
        <label>Password</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}"/>
        @if ($errors->has('password')) <em class="error">{{ $errors->first('password') }}</em> @endif

        <label>Address</label>
        <input type="text" name="address" id="address" value="{{ old('address') }}"/>
        @if ($errors->has('address')) <em class="error">{{ $errors->first('address') }}</em> @endif

        <label>ABN</label>
        <input type="text" name="abn" id="abn" value="{{ old('abn') }}" />
        @if ($errors->has('abn')) <em class="error">{{ $errors->first('abn') }}</em> @endif

        <input type="hidden" name="agent_id" value="{{ old('agent_id',$agent_id) }}">
        <input type="submit" name="submit" value="submit"/>
    </form>
@endsection