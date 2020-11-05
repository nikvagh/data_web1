@extends('layouts.new_pro')@section('content')
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
    <!-- 
    <div class="container">
        <h4>{{ $title }}</h4> -->
        <div class="col-md-12">
          @if(session()->get('error'))
          <div  id="msg">
              <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{ session()->get('error') }}
              </div>
          </div>

          @endif
            <div class="box mx-auto col-md-6">
                <form role="form" method="post" enctype="multipart/form-data" action="{{ url('agent_commission_rules') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>To</label>
                            <input type="number" name="to" placeholder="to" class="form-control" value="{{old('to')}}" />
                        </div>
                        @error('to')
                        <small class="form-text text-danger" > {{ $message }}</small>
                        @enderror

                         <div class="form-group">
                            <label>From</label>
                            <input type="number" name="from" placeholder="from" class="form-control" value="{{old('from')}}" />
                        </div>
                        @error('from')
                        <small class="form-text text-danger" > {{ $message }}</small>
                        @enderror


                        <label>Earning Type</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="earning_type"  value="percent" @if(old('earning_type')=='percent') checked  @endif />
                            <label class="form-check-label" for="exampleRadios1">
                                <b>Percent (%)</b>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="earning_type" value="fixed_runt" @if(old('earning_type')=='fixed_runt') checked  @endif />
                            <label class="form-check-label" for="exampleRadios1">
                                <b>Fixed Runt</b>
                            </label>
                        </div>
                        @error('earning_type')
                        <small class="form-text text-danger" > {{ $message }}</small>
                        @enderror

                        <div class="box-body">
                            <div class="form-group">
                                <label>earning</label>
                                <input type="number" name="earning" placeholder="Earning" class="form-control" value="{{old('earning')}}" />
                            </div>
                            @error('earning')
                            <small class="form-text text-danger" > {{ $message }}</small>
                            @enderror

                            <div class="form-group">
                                <input type="submit" class="btn btn-cus btn-primary float-right" value="ADD" />
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</section>
<!-- end body -->
 @endsection