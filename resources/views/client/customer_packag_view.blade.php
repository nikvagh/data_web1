
@extends('layouts.new') @section('content')

<!-- start body -->
<section class="card-body">
    <div class="container">
        <h4>{{ $title }}</h4>
        <div class="col-md-12">
            <div class="box mx-auto col-md-6">
        <form role="form" method="post" action="{{ route('withdraw') }}" enctype="multipart/form-data">
       @csrf 
  

                      <table class="table table-striped">
                            <tr>
                                <td style="width: 40px">Id</td>
                                <th style="width: 60px">
                                    {{ $Package->PackageUser_id }}
                                </th>
                            </tr>
                            <tr>
                                <td>Package Name </td>
                                <th>{{ $Package->name }}</th>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <th>{{ $Package->amount }}</th>
                            </tr>
                            <tr>
                                <td>Date </td>
                                <th>{{ $Package->created_at }}</th>
                            </tr>
                           
                            
                        </table>

                  

                </form>
            </div>
        </div>
    </div>
</section>

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