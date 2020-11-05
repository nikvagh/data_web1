@extends('layouts.new_pro') @section('content')

  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/contact.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">

                    <h2 class="page-title">Deposit 
                      </h2>
                   <!--  <ol class="breadcrumb">

                          

                            <li>Control panel</li>

                        </ol> -->
                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">

                    </nav>

                </div>

            </div>

        </div>

    </div>

  </section>

<div class="container pt-120 pb-120">
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Deposit Type</h3>
                </div>

                <div >
                    <a href="#" class="btn btn-primary">Crypto</a>
                    <a href="{{url('card')}}" class="btn btn-info">visa/master</a>
                    <a href="#" class="btn btn-warning">Poli</a>
                    <a href="#" class="btn btn-danger">western</a>
                    <a href="#" class="btn btn-success">union</a>
                    <a href="#" class="btn btn-primary">bank deposit</a>
                </div>
            </div>
        </div>

    </div>
</section></div>
        @endsection
