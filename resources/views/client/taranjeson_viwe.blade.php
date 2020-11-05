
@extends('layouts.new_pro')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> -->
@endsection

@section('content')

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
    
<!-- <div class="container">
       <h4>{{ $title }}</h4> -->
    <div class="col-md-12">
<!--         <div class="text-right m-2">
<a  href="{{ route('addcustomer') }}" class="btn btn-sm btn-cus ">Add Customer</a>
</div> -->

    <div class="box">
       
        <!-- /.box-header -->

        <div class="box-body">

            <div id="example1_wrapper" class="col-md-12 p-10">
               
                       <table class="table table-striped">
                            <tr>
                                <td style="width: 40px">Transactions Id</td>
                                <th style="width: 60px">
                                    {{$data[0]->transactions_id}}
                                </th>
                            </tr>
                            <tr>
                                <td>Customer Name</td>
                                <th>{{$data[0]->name}}</th>
                            </tr>
                            <tr>
                                <td>Customer Name</td>
                                <th>{{$data[0]->name}}</th>
                            </tr>
                            <tr>
                                <td>Agent ID</td>
                                <th>{{$data[0]->business_name}}</th>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <th>{{$data[0]->amount}}</th>
                            </tr>
                            <tr>
                                <td>Customer Name</td>
                                <th>{{$data[0]->name}}</th>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <th>@if($data[0]->type=='d') Deposit @elseif($data[0]->type=='w') without @endif</th>
                            </tr>
                            <tr>
                                <td>Deposit type</td>
                                <th>
                                    @if($data[0]->deposittype==1) Crypto
                                    @elseif($data[0]->deposittype==2) Visa/Master
                                    @elseif($data[0]->deposittype==3) Poli
                                    @elseif($data[0]->deposittype==4) Western Union
                                    @elseif($data[0]->deposittype==5) Bank Deposit
                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <th>{{$data[0]->phone}}</th>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <th>{{$data[0]->email}}</th>
                            </tr>
                            
                        </table>
            
                        <div id="example1_processing" class="dataTables_processing" style="display: none;">Processing...</div>
                    </div>
                </div>

    </div>
</div></div></section>
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