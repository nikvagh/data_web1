
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
                                <td style="width: 40px">Transactions Id</td>
                                <th style="width: 60px">
                                   {{$transactions[0]->transactions_id}}
                                </th>
                            </tr>
                            <tr>
                                <td>Customer Name </td>
                                <th>{{$transactions[0]->name}}</th>
                            </tr>
                            <tr>
                                <td>Agent Name</td>
                                <th>{{$transactions[0]->business_name}}</th>
                            </tr>
                            <tr>
                                <td>Amount </td>
                                <th>{{$transactions[0]->amount}}</th>
                            </tr>
                            <tr>
                                <td>Type </td>
                                <th>@if($transactions[0]->type=='d')<b>Deposit</b>@elseif($transactions[0]->type=='w')<b>without</b>@endif</th>
                            </tr>
                            <tr>
                                <td>Deposit type </td>
                                <th>@if($transactions[0]->deposittype==1)<b>Crypto</b>
                                    @elseif($transactions[0]->deposittype==2)<b>Visa/Master</b>
                                    @elseif($transactions[0]->deposittype==3)<b>Poli</b>
                                    @elseif($transactions[0]->deposittype==4)<b>Western Union</b>
                                    @elseif($transactions[0]->deposittype==5)<b>Bank Deposit</b>
                                    @endif</th>
                            </tr>
                            <tr>
                                <td>Agent Commission </td>
                                <th>{{$transactions[0]->agentcommission}}</th>
                            </tr>
                            <tr>
                                <td>Commission(%) </td>
                                <th>{{$transactions[0]->commission}}</th>
                            </tr>
                            <tr>
                                <td>Email </td>
                                <th>{{$transactions[0]->email}}</th>
                            </tr>

                           
                            
                        </table>

                </form>
            </div>
        </div>
    </div>
</section>

<!-- end body -->
  
@endsection







