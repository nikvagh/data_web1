@extends('layouts.agent_dash')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('back_asset/plugins/datatables/dataTables.bootstrap.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> -->
@endsection

@section('content')

<section class="content-header"> <h1>{{ $title }}</h1> </section>

<section class="content">

    @if (Session::has('message_e'))
        @include('partials.alert', ['type' => "danger",'message'=> Session::get('message_e') ])
    @endif

    @if (Session::has('message_s'))
        @include('partials.alert', ['type' => "success",'message'=> Session::get('message_s') ])
    @endif

    
  @if(session()->get('success'))
   <div class="container-fluid" id="msg" style="margin: 10px;">
         <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                   {{ session()->get('success') }} 
                  </div>
    </div>
    
  @endif
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <!-- <h3 class="box-title">Hover Data Table</h3> -->
                  <!--   <div class="pull-right">
                        <a href="{{ route('addcustomer') }}" class="btn btn-sm btn-primary">Add Customer</a>
                    </div> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                             
                                <th>phone</th>
                                <th>Email</th>
                                <th>address</th>
                                <th>amount</th>
                                <th>commission(%)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

@endsection

@section('js')
    <script src="{{ asset('back_asset/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('back_asset/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    
    <!-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
    <script>
        $(function () {
            // $("#example1").DataTable();
            $('#example1').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('taranjeson_data') !!}',
                columns: [
                  
                    { data: 'name', name: 'name' },
                    { data: 'phone', name: '' },
                    { data: 'email', name: 'email' },
                    { data: 'address', name: 'address' },
                    { data: 'amount', name: 'amount' },
                    { data: 'commission', name: 'commission' },
                    { data: 'action', name: 'action' }
                ]
            });
        });
    </script>
    
@endsection