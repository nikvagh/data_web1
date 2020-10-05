@extends('layouts.admin_dash')
@section('content')


<section class="content">
    <div class="row">

        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Agent</h3>
                </div>

                <!-- form start -->
                <form role="form" method="post" action="{{ route('store_product') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <h4>ID : <span>{{$get->agent_id}}</span></h4>
                        </div>
                                  <div class="form-group">
                            <h4>Business Name : <span>{{$get->business_name}}</span></h4>
                        </div>
                                <div class="form-group">
                            <h4>Abn : <span>{{$get->abn}}</span></h4>
                        </div>
                                  <div class="form-group">
                            <h4>Type of Industry : <span>{{$get->type_of_industry}}</span></h4>
                        </div>
                        
                         <div class="form-group">
                            <h4>Wallet : <span>{{$get->wallet}}</span></h4>
                        </div>
                         <div class="form-group">
                            <h4>Commission : <span>{{$get->commission}}</span></h4>
                        </div>
                          <div class="form-group">
                            <h4>Membership End Date : <span>{{$get->membership_end}}</span></h4>
                        </div>
                        

                         <div class="form-group">
                   			<a href="{{ url()->previous() }}" class="btn btn-primary" style="float: right;">Back</a>
                   		</div>
                    </div>

                </form>
                
            </div>

        </div>

    </div>
    <!-- /.row -->
</section>
@endsection