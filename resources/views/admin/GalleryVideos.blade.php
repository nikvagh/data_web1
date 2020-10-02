@extends('layouts.admin_dash')



@section('content')

<section class="content-header">

</section>

<section class="content">
    <div class="row">

        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Videos</h3>
                </div>

                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="{{ route('addVideos') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>Videos</label>
                            <input type="file" name="Videos"   accept="video/mp4"   class="form-control"  value="{{old('Videos')}}">
                           @error('Videos')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                
            </div>

        </div>

    </div>
    <!-- /.row -->
</section>

@endsection

