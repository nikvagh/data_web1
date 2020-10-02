@extends('layouts.agent_dash')
@section('css')



@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
  @if(session()->get('success'))
   <div class="container-fluid" id="msg" style="margin: 10px;">
         <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                   {{ session()->get('success') }} 
                  </div>
    </div>
    
  @endif
<!-- Main content -->
    <label style="display: none;">{{$get = DB::table('agent')->where('agent_id', Auth::user()->id) ->get()}}</label>
<section class="content">

@if(date("Y-m-d")>$get[0]->membership_end)
    <!-- Small boxes (Stat box) -->
    <div class="callout callout-danger">
        <h4><i class="icon fa fa-ban"></i>  Warning!</h4>

        <p><b>Note:</b> Your Account Validity Has Expired Renew Membership.</p>
      </div>
      <a href="{{url('renewmembership')}}" class="btn btn-danger">Membership Renew </a>
        <!-- ./col -->
    </div>

    @php
        echo "<pre>";
        print_r($users);
        exit;
    @endphp

@endif
    <!-- /.row -->
<div id="container"></div>
</section>
<!-- /.content -->

@endsection

@section('js')
<!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->

<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script type="text/javascript" src="https://www.highcharts.com/samples/data/usdeur.js"></script>

<script type="text/javascript">
    var users = [<?php echo join($users, ',') ?>];
    console.log(users);

    // console.log(users.length);
    // alert(users[0]);

    // for (var i=0; i<=users.length; i++) {
    //     console.log(users[i]);

    // }
    // transaction_highchart = [];
    // $.each(users,function(key,val){
    //     // console.log(key);

    //     // var myDate = "26-02-2012";
    //     ymd_date = key.split(' ');
    //     myDate = ymd_date[0].split("-");
    //     // console.log(myDate);

    //     var newDate = new Date( myDate[0], myDate[1] - 1, myDate[2]);
    //     date_str = newDate.getTime();

    //     // date_str = 'Date.UTC(2007, 8, 18)';
    //     // transaction_highchart[date_str] = val;
    //     // transaction_highchart[] = date_str+','+val;
    //     transaction_highchart.push(date_str+','+val);
    // });
    // console.log(transaction_highchart);

Highcharts.stockChart('container', {
    title: {
        text: 'Transactions: {tickInterval: 0.02},'
    },
    yAxis: {
        tickInterval: 100
    },
    rangeSelector: {
        selected: 1
    },
    series: [{
        name: 'Transactions',
        data: users
    }]
});
//  Highcharts.chart('container1', {
//         title: {
//             text: 'Transactions'
//         },
        
//          xAxis: {
//             categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
//         },
//         yAxis: {
//             title: {
//                 text: 'Number of New Transactions'
//             }
//         },
//         legend: {
//             layout: 'vertical',
//             align: 'right',
//             verticalAlign: 'middle'
//         },
//         plotOptions: {
//             series: {
//                 allowPointSelect: true
//             }
//         },
//         series: [{
//             name: 'Transactions',
//             data: users
//         }],
//         responsive: {
//             rules: [{
//                 condition: {
//                     maxWidth: 500
//                 },
//                 chartOptions: {
//                     legend: {
//                         layout: 'horizontal',
//                         align: 'center',
//                         verticalAlign: 'bottom'
//                     }
//                 }
//             }]
//         }
// });
</script>
@endsection