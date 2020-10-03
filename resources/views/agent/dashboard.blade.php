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
<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
   $(function () {
var data_click = <?php echo $click; ?>;
var data_viewer = <?php echo $viewer; ?>;
var data_year = <?php echo $year; ?>;
$('#container').highcharts({
     // chart: {
     //   type: 'column'
     // },
     title: {
       text: 'Transactions & Commission '
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
       name: 'Commission',
       data: data_click
     }, {
       name: 'Transactions',
       data: data_viewer
    }]
  });
});
</script>

@endsection