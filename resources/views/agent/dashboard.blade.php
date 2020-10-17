@extends('layouts.new')

@section('content')
<div class="container">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h2>
        Dashboard
        <small>Control panel</small>
    </h2>

</section>
  @if(session()->get('success'))
   <div class="" id="msg" >
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
@endif
  
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="alert alert-primary">
            <div class="inner">
              <h3>{{$totalPackage}}</h3>

              <p>Total Packages Sell</p>
            </div>
           <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ url('package') }}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="alert alert-warning">
            <div class="inner">
              <h3>{{$totalPackagesell->sum('amount')}}</h3>

              <p>Total sell</p>
            </div>
             <div class="icon">
             
            </div>
            
            <a href="{{ url('package') }}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="alert alert-danger">
            <div class="inner">
              <h3>{{ $totalCustomer }}</h3>

              <p>Total Customer</p>
            </div>
            <div class="icon">
            
            </div>
            <a href="{{ url('customerlist') }}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="alert alert-success">
            <div class="inner">
              <h3>{{$totalcommission->commission }}</h3>

              <p>Total Commission</p>
            </div>
            <div class="icon">
              
            </div>
            <a href="{{ url('taranjesonlist') }}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
 <div class="box ">
            <!-- <div class="box-header"><h3 class="box-title">Chart</h3></div> -->
           
    <div class="border border-dark">
        <div id="container"></div>
      </div>
          </div>
</section>
<!-- /.content -->
</div>
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