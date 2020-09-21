@extends('layouts.admin_dash')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('back_asset/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')

<section class="content-header"> <h1>{{ $title }}</h1> </section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- <div class="box-header">
                    <h3 class="box-title"></h3>
                </div> -->
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Agent ID</th>
                                <th>Customer ID</th>
                                <th>Amount </th>
                                <th>Viwe</th>
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
    
    <script>
        $(function () {
            // $("#example1").DataTable();
            $('#example1').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('agent_data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'agent_id', name: 'agent_id' },
                    { data: 'customer_id', name: 'customer_id' },
                    { data: 'amount', name: 'amount' },
                    { data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>
@endsection