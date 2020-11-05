
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
  

                      <table class="table table-striped">
                            <tr>
                                <td style="width: 40px">Id</td>
                                <th style="width: 60px">
                                    {{ $Package->PackageUser_id }}
                                </th>
                            </tr>
                            <tr>
                                <td>Package Name </td>
                                <th>{{ $Package->name }}</th>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <th>{{ $Package->amount }}</th>
                            </tr>
                            <tr>
                                <td>Date </td>
                                <th>{{ $Package->created_at }}</th>
                            </tr>
                           
                            
                        </table>

                  

                </form>
            </div>
        </div>
    </div>
</section>

<!-- end body -->
  
@endsection









@section('content')


<section class="content">
    <div class="row">
        <form role="form" method="post" action="{{ route('Submitprofile') }}" enctype="multipart/form-data">
            <div class="col-md-6">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Transaction</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                        </div>
                    </div>

                    <div class="box-body no-padding">
                      
                    </div>
                </div>

            </div>
        </form>
    </div>

    
</section>
@endsection