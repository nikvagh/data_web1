@extends('layouts.admin_dash') @section('content')

<section class="content">
    <div class="row">
        <form role="form" method="post" action="{{ route('settings') }}">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Settings</h3>
                    </div>

                    <!-- form start -->
                    <input type="hidden" name="id" value="{{$data[0]->settings_id }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Name</label>
                            <input type="text" class="form-control" name="company_name" value="{{$data[0]->company_name}}" placeholder="Company Name" />
                            @error('company_name')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Email Address</label>
                            <input type="email" class="form-control" name="Email" value="{{$data[0]->Email}}" aria-describedby="emailHelp" placeholder="Enter email" />
                            @error('Email')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Mobile Number</label>
                            <input type="text"  value="{{$data[0]->mobile_number}}" class="form-control" value="+91 " maxlength="14" name="mobile_number" placeholder="+91 89878684" />
                            @error('mobile_number')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Address</label>
                            <textarea class="form-control" name="address" placeholder="Company Address">{{$data[0]->address}}</textarea>
                            @error('address')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" style="float: right;" class="btn btn-primary" value="Updata" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Terms And Conditions</h3>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <textarea name="terms_conditions"  class="form-control" id="terms">{{$data[0]->terms_conditions}}</textarea>
                        </div>
                        @error('address')
                        <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                        @enderror
                    </div>

                    @csrf
                    <div class="box-body">
                        <div class="form-group"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /.row -->
</section>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace("terms");
</script>
@endsection
