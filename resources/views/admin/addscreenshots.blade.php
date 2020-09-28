@extends('layouts.admin_dash')

@section('css')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>
@endsection

@section('content')

<section class="content-header">

</section>

<section class="content">
    <div class="row">

        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add screenshots</h3>
                </div>

                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="{{ route('addScreenshots') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>Screenshots</label>
                            <input type="file" name="Videos"   accept="image/png, image/jpeg" class="form-control"  value="{{old('Videos')}}">
                           @error('Videos')
                            <small class="form-text text-muted" style="color: red;">The Screenshots field is required.</small>
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

@section('js')



@endsection