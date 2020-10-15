
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
        <div class="text-right m-2">
 <a class="btn btn-sm btn-cus" style="" href="{{url('deposit')}}">Transaction </a>
</div>

    <div class="box">
       
        <!-- /.box-header -->

        <div class="box-body">

            <div id="example1_wrapper" class="col-md-12 p-10">
               
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
<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable1').DataTable();
} );
</script>

    
@endsection




