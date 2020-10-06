@extends('layouts.admin_dash') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Dashboard <small>Control panel</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="#"><i class="fa fa-dashboard"></i> Home</a>
        </li>
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

<section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$totalcustomer}}</h3>

                    <p>Total Customer</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{url('admin/customer')}}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$totalagent}}</h3>

                    <p>Total Agent</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>

                <a href="{{url('admin/agent')}}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$totalproducts}}</h3>

                    <p>Total Package</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{url('admin/package')}}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$totatransactions->sum('amount')}}</h3>

                    <p>Total transaction</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{url('admin/package')}}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- chart -->
    <div class="box">
     

        <div id="container"></div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$totatcommission->SUM('commission')}}</h3>

                    <p>Total commission</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{url('admin/package')}}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div style="width: 50%;">
      <div class="box">
     

        <div id="agent"></div>
    </div></div>
</section>
@endsection @section('js')
<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
       $(function () {
    var data_Commission = <?php echo $agent_commission; ?>;
    var data_withdraw = <?php echo $withdraw; ?>;
    var data_deposit = <?php echo $deposit; ?>;
    var data_Transactions = <?php echo $Transactions; ?>;
    var data_year = <?php echo $year; ?>;
    $('#container').highcharts({
        title: {
            text: 'Agent Commission, Transactions, Withdraw & Deposit'
        },

           xAxis: {
           categories: data_year
         },
         yAxis: {
            title: {
            text: 'Rate'
           }
         },
        series: [{
           name: 'Agent Commission',
           data: data_Commission
         }, {
           name: 'Transactions',
           data: data_Transactions
        }, {
           name: 'Withdraw',
           data: data_withdraw
        },
        {
           name: 'Deposit',
           data: data_deposit
        }]
      });
    });
</script>
<script type="text/javascript">
       $(function () {
   
    var agentcommission = <?php echo $agentcommission; ?>;
    var agentsellamount = <?php echo $agentsellamount; ?>;
    var agentname = <?php echo $agentname; ?>;
    
    // console.log(agentcommission);
    $('#agent').highcharts({
        title: {
            text: 'Commission & Agent Sell'
        },
         chart: {
           type: 'column'
         },

           xAxis: {
           categories: agentname
         },
         yAxis: {
            title: {
            text: 'Rate'
           }
         },
        series: [ {
                name: 'Agent Sell',
                data:agentsellamount
            },
            {
                name: 'commission',
                data:agentcommission
            }]
      });
    });
</script>

@endsection
