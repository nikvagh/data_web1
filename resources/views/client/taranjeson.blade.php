@extends('layouts.customer_dash') @section('content')
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('back_asset/plugins/datatables/dataTables.bootstrap.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> -->
@endsection
<!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> -->
<section class="content-header"> <h1>Transaction  List</h1> </section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-">
               <div class="box-header">
                    <div class="pull-right">
                        <a class="btn btn-primary" style="" href="{{url('deposit')}}">ADD</a>
                    </div>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="myTable1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>Agent ID</th>
                                <th>Amount</th>
                                <th>type</th>
                                <th>Deposit type</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $key)
                            <tr>
                                <td>{{$key->name}}</td>

                                <td>{{$key->business_name}}</td>
                                <td>{{$key->amount}}</td>
                                <td>
                                    @if($key->type=='d')
                                    <p>Deposit</p>
                                    @elseif($key->type=='w')
                                    <p>without</p>
                                    @endif
                                </td>

                                <td>
                                    @if($key->deposittype==1)
                                    <p>Crypto</p>
                                    @elseif($key->deposittype==2)
                                    <p>Visa/Master</p>
                                    @elseif($key->deposittype==3)
                                    <p>Poli</p>
                                    @elseif($key->deposittype==4)
                                    <p>Western Union</p>
                                    @elseif($key->deposittype==5)
                                    <p>Bank Deposit</p>
                                    @endif
                                </td>

                                <td><a href="{{url('taranjeson/view',$key->transactions_id )}}" class="btn btn-primary">View</a>
                                <a href="{{url('Invoice',$key->transactions_id )}}" class="btn btn-primary">Invoice</a></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
</section>
   @endsection
    <!-- /.row -->
    @section('js')
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
    <script src="{{ asset('back_asset/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('back_asset/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable1').DataTable();
} );
</script>

@endsection
