@extends('layouts.agent_dash') @section('content')
<style type="text/css">
    .image-upload > input {
        display: none;
    }
</style>
<section class="content">
    <div class="row">
        <form role="form" method="post" action="{{ route('withdraw') }}" enctype="multipart/form-data">
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
            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">withdraw</h3>
                    </div>
                    @csrf

                    <div class="box-body">
                        <!--  <div class="form-group">
                            <h4>Wallet Balance : <b></b></h4>
                        </div> -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Amount</label>
                            <input type="text" class="form-control" name="amount" placeholder="Amount" />
                            @error('amount')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="withdraw" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
