
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

                   <table class="table table-striped">
                            <tr>
                                <td style="width: 40px">Id</td>
                                <th style="width: 60px">{{$get->agent_id}}</th>
                            </tr>
                            <tr>
                                <td>Business Name </td>
                                <th>{{$get->business_name}}</th>
                            </tr>
                            <tr>
                                <td>Abn</td>
                                <th>{{$get->abn}}</th>
                            </tr>
                            <tr>
                                <td>Type of Industry </td>
                                <th>{{$get->type_of_industry}}</th>
                            </tr>
                            <tr>
                                <td>Wallet </td>
                                <th>{{$get->wallet}}</th>
                            </tr>
                            <tr>
                                <td>Commission </td>
                                <th>{{$get->commission}}</th>
                            </tr>
                            <tr>
                                <td>Membership End Date </td>
                                <th>{{$get->membership_end}}</th>
                            </tr>
                            <tr>
                                <td>Address </td>
                                <th>{{$get->address}}</th>
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
                        <h3 class="box-title">Agent</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                        </div>
                    </div>

                    <div class="box-body no-padding">
                               <table class="table table-striped">
                            <tr>
                                <td style="width: 40px">Id</td>
                                <th style="width: 60px">{{$get->agent_id}}</th>
                            </tr>
                            <tr>
                                <td>Business Name </td>
                                <th>{{$get->business_name}}</th>
                            </tr>
                            <tr>
                                <td>Abn</td>
                                <th>{{$get->abn}}</th>
                            </tr>
                            <tr>
                                <td>Type of Industry </td>
                                <th>{{$get->type_of_industry}}</th>
                            </tr>
                            <tr>
                                <td>Wallet </td>
                                <th>{{$get->wallet}}</th>
                            </tr>
                            <tr>
                                <td>Commission </td>
                                <th>{{$get->commission}}</th>
                            </tr>
                            <tr>
                                <td>Membership End Date </td>
                                <th>{{$get->membership_end}}</th>
                            </tr>
                            <tr>
                                <td>Address </td>
                                <th>{{$get->address}}</th>
                            </tr>
                           
                            
                        </table>
                    </div>
                </div>

            </div>
        </form>
      </section>
@endsection