@extends('layouts.new_pro')

@section('content')

  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/contact.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">

                    <h2 class="page-title">Dashboard
                      </h2>
                    <ol class="breadcrumb">

                          

                            <li>Control panel</li>

                        </ol>
                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">

                    </nav>

                </div>

            </div>

        </div>

    </div>

  </section>
<!-- Content Header (Page header) -->
<div class="container pt-120 pb-120">

  @if(session()->get('success'))
   <div  id="msg" >
         <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                   {{ session()->get('success') }} 
                  </div>
    </div>
    
  @endif
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="alert alert-danger">
            <div class="inner">
              <p>Package Total</p>

              <h3>{{ $packagcount }}</h3>

            
            </div>
           
            <a href="{{url('customers/packag')}}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
                <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="alert alert-primary">
            <div class="inner">
              <p>Active Package</p>

              <h3>{{$packag->sum('amount')}}</h3>

            
            </div>
          
            <a href="{{url('customers/packag')}}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
   
      </div>
       <div class="box ">
            <!-- <div class="box-header"><h3 class="box-title">Chart</h3></div> -->
           
    
         <div class="border border-dark">
        <div id="container"></div>
      </div>
          </div>
     
 
</section></div>
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
      title: {
        text: ''
    },
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