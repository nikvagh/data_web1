@extends('layouts.admin_dash')
@section('content')


<section class="content">
        <div class="row">
        <form role="form" method="post" action="{{ route('Submitprofile') }}" enctype="multipart/form-data">
            <div class="col-md-6">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Package</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                        </div>
                    </div>

                    <div class="box-body no-padding">
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
                    </div>
                </div>

            </div>
        </form>
    </div>



</section>
@endsection