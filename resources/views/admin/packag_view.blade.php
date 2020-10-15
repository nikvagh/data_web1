
@extends('layouts.new') @section('content')

<!-- start body -->
<section class="card-body">
    <div class="container">
        <h4>{{ $title }}</h4>
        <div class="col-md-12">
            <div class="box mx-auto col-md-6">
        <form role="form" method="post" action="{{ route('withdraw') }}" enctype="multipart/form-data">
     

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








