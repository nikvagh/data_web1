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
<!--     <div class="container">
        <h4>{{ $title }} ADD</h4> -->
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
                    
                    <input type="submit" class="btn btn-primary float-right" value="ADD" >
                  </div>

                </form>
            </div>
        </div>
    </div>
</section>

<!-- end body -->

  
@endsection



