@extends('layouts.admin_dash')
@section('content')


<section class="content">
    <div class="row">

        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Show Sales</h3>
                </div>

                <!-- form start -->
                <form role="form" method="post" action="{{ route('store_product') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <h4>ID : <span>{{$salesdata[0]->id}}</span></h4>
                        </div>
                                  <div class="form-group">
                            <h4>Agent ID : <span>{{$salesdata[0]->agent_id}}</span></h4>
                        </div>
                                <div class="form-group">
                            <h4>Customer ID : <span>{{$salesdata[0]->customer_id}}</span></h4>
                        </div>
                                  <div class="form-group">
                            <h4>Amount : <span>{{$salesdata[0]->amount}}</span></h4>
                        </div>
                         <div class="form-group">
                   			<a href="{{url('admin/agent')}}" class="btn btn-primary" style="float: right;">Back</a>
                   		</div>
                    </div>

                </form>
                
            </div>

        </div>

    </div>
    <!-- /.row -->
</section>
@endsection