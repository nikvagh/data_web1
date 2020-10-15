
@extends('layouts.new') @section('content')

<!-- start body -->
<section class="card-body">
    <div class="container">
        <h4>{{ $title }}</h4>
        <div class="col-md-12">
            <div class="box mx-auto col-md-6">
        <form role="form" method="post" action="{{ route('withdraw') }}" enctype="multipart/form-data">
       @csrf 
                
                 @if(session()->get('error'))
            <div class="container-fluid" id="msg">
                <div class="callout callout-danger">
                    <h4>Payment Failed!</h4>
                    <p>{{ session()->get('error') }}</p>
                </div>
                @endif @if(session()->get('success'))
                <div class="container-fluid" id="msg" style="margin: 10px;">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                        {{ session()->get('success') }}
                    </div>
                </div>
                @endif

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
                   <div class="form-group">
                    
                    <input type="submit" class="btn btn-cus float-right" value="withdraw" >
                  </div>

                </form>
            </div>
        </div>
    </div>
</section>

<!-- end body -->
  
@endsection






