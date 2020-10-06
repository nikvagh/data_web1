@extends('layouts.customer_dash') @section('content')
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
                        <table class="table table-striped">
                            <tr>
                                <td style="width: 40px">Transactions Id</td>
                                <th style="width: 60px">
                                    {{$data[0]->transactions_id}}
                                </th>
                            </tr>
                            <tr>
                                <td>Customer Name</td>
                                <th>{{$data[0]->name}}</th>
                            </tr>
                            <tr>
                                <td>Customer Name</td>
                                <th>{{$data[0]->name}}</th>
                            </tr>
                            <tr>
                                <td>Agent ID</td>
                                <th>{{$data[0]->business_name}}</th>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <th>{{$data[0]->amount}}</th>
                            </tr>
                            <tr>
                                <td>Customer Name</td>
                                <th>{{$data[0]->name}}</th>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <th>@if($data[0]->type=='d') Deposit @elseif($data[0]->type=='w') without @endif</th>
                            </tr>
                            <tr>
                                <td>Deposit type</td>
                                <th>
                                    @if($data[0]->deposittype==1) Crypto
                                    @elseif($data[0]->deposittype==2) Visa/Master
                                    @elseif($data[0]->deposittype==3) Poli
                                    @elseif($data[0]->deposittype==4) Western Union
                                    @elseif($data[0]->deposittype==5) Bank Deposit
                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <th>{{$data[0]->phone}}</th>
                            </tr>
                            <tr>
                                <td>Email</td>
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