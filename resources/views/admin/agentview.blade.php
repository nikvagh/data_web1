@extends('layouts.admin_dash')
@section('content')


<section class="content">


<div class="row">
        <form role="form" method="post" action="{{ route('Submitprofile') }}" enctype="multipart/form-data">
            <div class="col-md-6">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agent</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                        </div>
                    </div>

                    <div class="box-body no-padding">
                               <table class="table table-striped">
                            <tr>
                                <td style="width: 40px">Id</td>
                                <th style="width: 60px">{{$get->agent_id}}</th>
                            </tr>
                            <tr>
                                <td>Business Name </td>
                                <th>{{$get->business_name}}</th>
                            </tr>
                            <tr>
                                <td>Abn</td>
                                <th>{{$get->abn}}</th>
                            </tr>
                            <tr>
                                <td>Type of Industry </td>
                                <th>{{$get->type_of_industry}}</th>
                            </tr>
                            <tr>
                                <td>Wallet </td>
                                <th>{{$get->wallet}}</th>
                            </tr>
                            <tr>
                                <td>Commission </td>
                                <th>{{$get->commission}}</th>
                            </tr>
                            <tr>
                                <td>Membership End Date </td>
                                <th>{{$get->membership_end}}</th>
                            </tr>
                            <tr>
                                <td>Address </td>
                                <th>{{$get->address}}</th>
                            </tr>
                           
                            
                        </table>
                    </div>
                </div>

            </div>
        </form>
      </section>
@endsection