@extends('layouts.new') @section('content')

<!-- start body -->
<section class="card-body">
    <div class="container">
        <h4>{{ $title }} ADD</h4>
        <div class="col-md-12">
            <div class="box mx-auto col-md-6">
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

                   <div class="form-group">
                    
                    <input type="submit" class="btn btn-cus float-right" value="ADD" >
                  </div>

                </form>
            </div>
        </div>
    </div>
</section>

<!-- end body -->

  
@endsection



