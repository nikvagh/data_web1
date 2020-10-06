@extends('layouts.agent_dash')
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
                                <td style="width: 40px">Transactions Id</td>
                                <th style="width: 60px">
                                   {{$data[0]->transactions_id}}
                                </th>
                            </tr>
                            <tr>
                                <td>Customer Name </td>
                                <th>{{$data[0]->name}}</th>
                            </tr>
                            <tr>
                                <td>Agent Name</td>
                                <th>{{$data[0]->business_name}}</th>
                            </tr>
                            <tr>
                                <td>Amount </td>
                                <th>{{$data[0]->amount}}</th>
                            </tr>
                            <tr>
                                <td>Type </td>
                                <th>@if($data[0]->type=='d')<b>Deposit</b>@elseif($data[0]->type=='w')<b>without</b>@endif</th>
                            </tr>
                            <tr>
                                <td>Deposit type </td>
                                <th>@if($data[0]->deposittype==1)<b>Crypto</b>
                                    @elseif($data[0]->deposittype==2)<b>Visa/Master</b>
                                    @elseif($data[0]->deposittype==3)<b>Poli</b>
                                    @elseif($data[0]->deposittype==4)<b>Western Union</b>
                                    @elseif($data[0]->deposittype==5)<b>Bank Deposit</b>
                                    @endif</th>
                            </tr>
                            <tr>
                                <td>Agent Commission </td>
                                <th>{{$data[0]->agentcommission}}</th>
                            </tr>
                            <tr>
                                <td>Commission(%) </td>
                                <th>{{$data[0]->commission}}</th>
                            </tr>
                            <tr>
                                <td>Email </td>
                                <th>{{$data[0]->email}}</th>
                            </tr>

                           
                            
                        </table>
                    </div>
                </div>

            </div>
        </form>
    </div>


                    
</section>
@endsection
