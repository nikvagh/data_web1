
@extends('layouts.new') @section('content')

<!-- start body -->
<section class="card-body">
    <div class="container">
        <h4>{{ $title }}</h4>
        <div class="col-md-12">
            <div class="box mx-auto col-md-6">
        <form role="form" method="post" action="{{ route('withdraw') }}" enctype="multipart/form-data">
       @csrf 
                 @if(session()->get('error'))
            <div class="container-fluid" id="msg">
                <div class="callout callout-danger">
                    <h4>Payment Failed!</h4>
                    <p>{{ session()->get('error') }}</p>
                </div>
                @endif @if(session()->get('success'))
                <div class="container-fluid" id="msg" style="margin: 10px;">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                        {{ session()->get('success') }}
                    </div>
                </div>
                @endif

                    <div class="form-group">
                            <label for="exampleInputEmail1">Amount</label>
                            <input type="text" class="form-control" name="amount" placeholder="Amount" />
                            @error('amount')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                   <div class="form-group">
                    
                    <input type="submit" class="btn btn-cus float-right" value="withdraw" >
                  </div>

                </form>
            </div>
        </div>
    </div>
</section>

<!-- end body -->
  
@endsection







