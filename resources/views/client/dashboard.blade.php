@extends('layouts.customer_dash')

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
<div id="container"></div>
<section class="content">
    <!-- Small boxes (Stat box) -->
    
        <!-- ./col -->
    </div>
    <!-- /.row -->


</section>
<!-- /.content -->

@endsection
@section('js')
<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
   $(function () {
var data_deposit = <?php echo $deposit; ?>;
var data_year = <?php echo $year; ?>;
$('#container').highcharts({
     // chart: {
     //   type: 'column'
     // },
    
       xAxis: {
       categories: data_year
     },
     yAxis: {
        title: {
        text: 'Rate'
       }
     },
    series: [
    {
       name: 'Deposit',
       data: data_deposit
    }]
  });
});
</script>

@endsection