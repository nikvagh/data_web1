<!DOCTYPE html>
<html>
<head>
  <title>
    

  </title>
  <style type="text/css">
    .cleararfix{
      clear: both;
    }
    .txt-right
    {
      text-align: right;
    }
  </style>
</head>
<body>
<section class="invoice">
      <!-- title row -->
      <div class="row" >
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> AdminLTE, Inc.<br>
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
        <div class="col-xs-12 table-responsive"><br>
          <table class="table table-striped"  style="width: 100%; float: right;">
            <thead style="text-align: left">
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
      <div class="cleararfix"></div>


        <!-- /.col -->
        <div class="col-xs-6" style="float: right;">
          <p class="lead">Amount Due 2/22/2014</p>

          <div class="table-responsive">
            <div style="width: 50%;"></div>
           <table class="table" style="width: 50%;">
              <tr>
                <th style="width:50% " class="txt-right">Subtotal:</th>
                <td> {{ $data->sum('amount') }}</td>
              </tr>
              <tr>
                <th style="width:50% "   class="txt-right">Tax (9.3%):</th>
                <td> {{($data->sum('amount')) % 9.3}}</td>
              </tr>
             
              <tr>
                <th  style="width:50% "   class="txt-right">Total:</th>
                <td>{{ ($data->sum('amount'))- (($data->sum('amount')) % 9.3)}}</td>
              </tr>
            </table>
          </div>
        </div>
      <!-- /.row -->


</body>
</html>
 