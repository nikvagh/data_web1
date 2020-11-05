@extends('layouts.new_pro') @section('content')


  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/contact.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">
<!-- 
                    <h2 class="page-title">{{ $title }}
                      </h2> -->
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
    <div class="container pt-120 pb-120">
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> AdminLTE, Inc.
            <small class="pull-right">Date: {{date('d/m/Y')}}</small>
          </h2>
        </div>
        <!-- /.col -->


      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Admin, Inc.</strong><br>
            {{$get[0]->address}}<br>
            Phone: {{$get[0]->mobile_number}}<br>
            Email: {{$get[0]->Email}}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>{{Auth::user()->name}}</strong><br>
            {{$customer[0]->address}}<br>
            Phone: {{Auth::user()->phone}}<br>
            Email: {{Auth::user()->email }}
          </address>
        </div>
        <!-- /.col -->
    <!--     <div class="col-sm-4 invoice-col">
          <b>Invoice #00{{Auth::user()->id}}</b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
        </div> -->
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Product</th>
             
              <th>Type</th>
              <th>Subtotal</th>
           
            </tr>
            </thead>
              <label style="display: none;">{{$no=1}}</label>

             
            <tbody>

              @foreach($data as $key)
            <tr>
              <td>{{$no++}}</td>
              <td>Call of Duty</td>
             
              <td> @if($key->type=='d')
                                   {{'Deposit'}}
                                    @elseif($key->type=='w')
                                    {{'without'}}
                                    @endif</td>
              <td>{{$key->amount }}</td>
             
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>

      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
 
         <!--  <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p> -->
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <!-- <p class="lead">Amount Due 2/22/2014</p> -->

          <div class="table-responsive">
            <table class="table ">
              <tr>
                <th class="float-right">Subtotal:</th>
                <td> {{ $data->sum('amount') }}</td>
              </tr>
            <!--   <tr>
                <th>Tax (9.3%)</th>
                <td> {{($data->sum('amount')) % 9.3}}</td>
              </tr> -->
             
              <tr>
                <th>Total:</th>
                <td>{{ ($data->sum('amount'))- (($data->sum('amount')) % 9.3)}}</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          
         
         
          <a href="{{url('Invoicepdf',$id)}}" class="btn btn-primary pull-right" style="margin-right: 5px;"> <i class="fa fa-download"></i> Generate PDF</a>
        </div>
      </div>
    </section></div>


    @endsection