@extends('layouts.admin_dash')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('back_asset/plugins/datatables/dataTables.bootstrap.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css">

    
@endsection

@section('content')

<section class="content-header"> <h1>Trading screenshots</h1> </section>

<section class="content">

    @if (Session::has('success'))
        @include('partials.alert', ['type' => "success",'id' => "msg",'message'=> Session::get('success') ])
    @endif

    @if (Session::has('message_s'))
        @include('partials.alert', ['type' => "success",'message'=> Session::get('message_s') ])
    @endif

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <!-- <h3 class="box-title">Hover Data Table</h3> -->
                    <div class="pull-right">
                        <a href="{{ route('Gallery/screenshots/addscreenshots') }}" class="btn btn-sm btn-primary">Add screenshots</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Image</th>
                               
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="{{ asset('back_asset/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('back_asset/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    
    <!-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
    <script>
        $(function () {
            // $("#example1").DataTable();
            $('#example1').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('screenshot_data') !!}',
                columns: [
                    { data: 'video_id', name: 'video_id' },
                    {
                        "name": "image",
                        "data": "image",
                        "render": function (data, type, full, meta) {
                            return "<a href=\""+'/uploads/Videos/'+ data + "\" data-lightbox='image-1' ><img src=\""+'/uploads/Videos/thumb/300x300_'+ data + "\" height=\"50\"/></a>";
                        },
                        "title": "Image",
                        "orderable": true,
                        "searchable": true
                    },
                    // { data: 'image', name: 'image' },
                     // {
                     //    "name": "video",
                     //    "data": "video",
                     //    "render": function (data, type, full, meta) {
                     //        console.log('data');
                     //        // return "<img >";
                     //    },
                     //    "title": "video",
                     //    "orderable": true,
                     //    "searchable": true
                     // },
                    { data: 'action', name: 'action' },

                    

                    
                ]
            });
        });
    </script>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
@endsection