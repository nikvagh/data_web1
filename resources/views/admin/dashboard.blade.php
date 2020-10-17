@extends('layouts.new') @section('content')

<div class="container">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Dashboard <small>Control panel</small></h1>
  
</section>
@if(session()->get('success'))
<div  id="msg">
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
            <div class="alert alert-primary">
                <div class="inner">
                    <h3>{{$totalcustomer}}</h3>

                    <p>Total Customer</p>
                </div>
               
                <a href="{{url('admin/customer')}}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="alert alert-secondary">
                <div class="inner">
                    <h3>{{$totalagent}}</h3>

                    <p>Total Agent</p>
                </div>
               

                <a href="{{url('admin/agent')}}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="alert alert-success">
                <div class="inner">
                    <h3>{{$totalproducts}}</h3>

                    <p>Total Package</p>
                </div>
               
                <a href="{{url('admin/package')}}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="alert alert-danger">
                <div class="inner">
                    <h3>{{$totatransactions->sum('amount')}}</h3>

                    <p>Total transaction</p>
                </div>
               
                <a href="{{url('admin/package')}}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- chart -->
    <div class="box">
     

    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="alert alert-warning">
                <div class="inner">
                    <h3>{{$totatcommission->SUM('commission')}}</h3>

                    <p>Total commission</p>
                </div>
                
                <a href="{{url('admin/package')}}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="border border-dark">
        <div id="container"></div>
    </div>
    <div >
      <div class="box">
     
<div class="border border-dark col-md-6" style="margin-top: 10px;">
        <div id="agent"></div>
    </div>
    </div></div>
</section></div>
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
