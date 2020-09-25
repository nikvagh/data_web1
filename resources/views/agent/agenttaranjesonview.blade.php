@extends('layouts.customer_dash') @section('content')
<section class="content">
    <div class="row">
        <form role="form" method="post" action="{{ route('Submitprofile') }}" enctype="multipart/form-data">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Taranjeson</h3>
                    </div>
                    
                    	<div class="form-group container-fluid">
                    		<p><span>Transactions Id:  </span><b>{{$data[0]->transactions_id}}</b></p>
                    		<p><span>Customer Name:  </span><b>{{$data[0]->name}}</b></p>
                    		<p><span>Agent ID:  </span><b>{{$data[0]->business_name}}</b></p>
                    		<p><span>Amount:  </span><b>{{$data[0]->amount}}</b></p>
                    		<p><span>type:  </span><b>@if($data[0]->type=='d')<b>Deposit</b>@elseif($data[0]->type=='w')<b>without</b>@endif</b></p>
                    		<p><span>Deposit type:  </span><b>@if($data[0]->deposittype==1)<b>Crypto</b>
                                    @elseif($data[0]->deposittype==2)<b>Visa/Master</b>
                                    @elseif($data[0]->deposittype==3)<b>Poli</b>
                                    @elseif($data[0]->deposittype==4)<b>Western Union</b>
                                    @elseif($data[0]->deposittype==5)<b>Bank Deposit</b>
                                    @endif</b></p>
                            <p><span>Agent Commission:  </span><b>{{$data[0]->agentcommission}}</b></p>
                            <p><span>commission(%):  </span><b>{{$data[0]->commission}}</b></p>

                    		<p><span>phone:  </span><b>{{$data[0]->phone}}</b></p>
                    		<p><span>email:  </span><b>{{$data[0]->email}}</b></p>	

                    	</div>
                    
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
