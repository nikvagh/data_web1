
@extends('layouts.new_pro') @section('content')
  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/contact.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">

                    <h2 class="page-title">{{ $title }}
                      </h2>
                 <!--    <ol class="breadcrumb">

                          

                            <li>Control panel</li>

                        </ol> -->
                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">

                    </nav>

                </div>

            </div>

        </div>

    </div>

  </section>

<!-- start body -->
<section class="card-body">
    <div class="container pt-120 pb-120">
        <!-- <h4>{{ $title }}</h4> -->
        <div class="col-md-12">
            <div class="box mx-auto col-md-6">
        <form role="form" method="post" action="{{ route('withdraw') }}" enctype="multipart/form-data">
       @csrf 
                 @if(session()->get('error'))
                <div class="alert alert-danger" id="msg">
                    <h4>Payment Failed!</h4>
                    <p>{{ session()->get('error') }}</p>
                </div>
                @endif 
                @if(session()->get('success'))
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
                            <small class="form-text text-danger" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                   <div class="form-group">
                    
                    <input type="submit" class="btn btn-primary float-right" value="withdraw" >
                  </div>

                </form>
            </div>
        </div>
    </div>
</section>

<!-- end body -->
  
@endsection







