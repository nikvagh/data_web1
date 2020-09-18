@extends('layouts.admin_dash')

@section('css')

@endsection

@section('content')

<section class="content-header">
    <h1>{{ $title }}</h1>
</section>

<section class="content">
    <div class="row">

        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add New Products</h3>
                </div>

                <!-- form start -->
                <form role="form" method="post" action="{{ route('store_product') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="{{old('name')}}">
                            @if ($errors->has('name')) <em class="error">{{ $errors->first('name') }}</em> @endif
                        </div>
                        
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount" value="{{old('amount')}}">
                            @if ($errors->has('amount')) <em class="error">{{ $errors->first('amount') }}</em> @endif
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                
            </div>

        </div>

    </div>
    <!-- /.row -->
</section>

@endsection

@section('js')

<script>
    $(function() {});
</script>

@endsection