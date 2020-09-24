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
                    		<h4><span>Transactions Id:  </span><b>{{$data[0]->transactions_id}}</b></h4>
                    		<h4><span>Customer Name:  </span><b>{{$data[0]->name}}</b></h4>
                    		<h4><span>Agent ID:  </span><b>{{$data[0]->business_name}}</b></h4>
                    		<h4><span>Amount:  </span><b>{{$data[0]->amount}}</b></h4>
                    		<h4><span>type:  </span><b>@if($data[0]->type=='d')<b>Deposit</b>@elseif($data[0]->type=='w')<b>without</b>@endif</b></h4>
                    		<h4><span>Deposit type:  </span><b>@if($data[0]->deposittype==1)<b>Crypto</b>
                                    @elseif($data[0]->deposittype==2)<b>Visa/Master</b>
                                    @elseif($data[0]->deposittype==3)<b>Poli</b>
                                    @elseif($data[0]->deposittype==4)<b>Western Union</b>
                                    @elseif($data[0]->deposittype==5)<b>Bank Deposit</b>
                                    @endif</b></h4>
                    		<h4><span>phone:  </span><b>{{$data[0]->phone}}</b></h4>
                    		<h4><span>email:  </span><b>{{$data[0]->email}}</b></h4>	

                    	</div>
                    
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
