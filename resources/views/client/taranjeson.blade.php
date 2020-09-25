@extends('layouts.customer_dash') @section('content')
@section('css')
<link rel="stylesheet" href="{{ asset('back_asset/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
<!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> -->
<section class="content-header">
    <h1>Taranjeson List</h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-">
                <!--  <div class="box-header">
                    <h3 class="box-title"></h3>
                </div> -->
                <a class="btn btn-primary" style="float: right; margin: 10px;" href="{{url('deposit')}}">ADD</a>
                <!-- /.box-header -->

                <div class="box-body">
                    <table id="myTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>Agent ID</th>
                                <th>Amount</th>
                                <th>type</th>
                                <th>Deposit type</th>
                                <th>Viwe</th>
                                <th>Invoice</th>
                            </tr>
                        </thead>
                        @foreach($data as $key)
                        <tbody>
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

                                <td><a href="{{url('taranjeson/view',$key->transactions_id )}}" class="btn btn-primary">View</a></td>
                                <td><a href="{{url('Invoice',$key->transactions_id )}}" class="btn btn-primary">Invoice</a></td>
                            </tr>
                        </tbody>

                        @endforeach
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
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

@endsection