@extends('layouts.agent_dash')
@section('content')


<section class="content">
    <div class="row">

        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Package</h3>
                </div>

                <!-- form start -->
                <form role="form" method="post" action="{{ route('store_product') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <h4>ID : <span>{{ $Package->PackageUser_id }}</span></h4>
                        </div>
                                  <div class="form-group">
                            <h4>Package Name : <span>{{ $Package->name }}</span></h4>
                        </div>
                                <div class="form-group">
                            <h4>Amount : <span>{{ $Package->amount }}</span></h4>
                        </div>
                                  <div class="form-group">
                            <h4>Date : <span>{{ $Package->created_at }}</span></h4>
                        </div>
                         <div class="form-group">
                   			<a href="{{url( url()->previous() )}}" class="btn btn-primary" style="float: right;">Back</a>
                   		</div>
                    </div>

                </form>
                
            </div>

        </div>

    </div>
    <!-- /.row -->
</section>
@endsection