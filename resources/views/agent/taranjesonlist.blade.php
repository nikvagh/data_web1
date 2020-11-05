
@extends('layouts.new_pro')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> -->
@endsection

@section('content')

  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/contact.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">

                    <h2 class="page-title">{{ $title }}
                      </h2>
                 <!--    <ol class="breadcrumb">

                          

                            <li>Control panel</li>

                        </ol> -->
                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">

                    </nav>

                </div>

            </div>

        </div>

    </div>

  </section>

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
    <div class="container pt-120 pb-120">
       <!-- <h4>{{ $title }}</h4> -->
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
                                <th>Customer Name</th>
                             
                                <th>phone</th>
                                <th>Email</th>
                                <th>address</th>
                                <th>amount</th>
                                <th>commission(%)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody> 
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

