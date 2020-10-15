
@extends('layouts.new')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> -->
@endsection

@section('content')

<!-- start body -->
<section class="card-body">
        @if (Session::has('message_e'))
        @include('partials.alert', ['type' => "danger",'message'=> Session::get('message_e') ])
    @endif

    @if (Session::has('message_s'))
        @include('partials.alert', ['type' => "success",'message'=> Session::get('message_s') ])
    @endif

    
  @if(session()->get('success'))
         <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                   {{ session()->get('success') }} </div>
    @endif
<div class="container">
       <h4>{{ $title }}</h4>
    <div class="col-md-12">
<!--         <div class="text-right m-2">
<a  href="{{ route('addcustomer') }}" class="btn btn-sm btn-cus ">Add Customer</a>
</div> -->

    <div class="box">
       
        <!-- /.box-header -->

        <div class="box-body">

            <div id="example1_wrapper" class="col-md-12 p-10">
               
                        <table id="example1" class="table table-bordered dataTable no-footer" role="grid" aria-describedby="example1_info" >
                            
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Business Name</th>
                                <th>Abn</th>
                                <th>commission </th>
                             <!--    <th>Address</th> -->
                                <th>Viwe</th>
                            </tr>
                        </thead>
                    </table>
            
                        <div id="example1_processing" class="dataTables_processing" style="display: none;">Processing...</div>
                    </div>
                </div>

    </div>
</div></div></section>
<!-- end body -->

@endsection

@section('js')


    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    
    <!-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
    <script>
        $(function () {
            // $("#example1").DataTable();
            $('#example1').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('agent_data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'business_name', name: 'business_name' },
                    { data: 'abn', name: 'abn' },
                    { data: 'commission', name: 'commission' },
                    // { data: 'address', name: 'address' },
                    { data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>
    
@endsection




