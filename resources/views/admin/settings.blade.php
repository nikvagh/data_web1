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
                    <input type="hidden" name="id" value="{{$data->settings_id }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Name</label>
                            <input type="text" class="form-control" name="company_name" value="{{$data->company_name}}" placeholder="Company Name" />
                            @error('company_name')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Email Address</label>
                            <input type="email" class="form-control" name="Email" value="{{$data->Email}}" aria-describedby="emailHelp" placeholder="Enter email" />
                            @error('Email')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Mobile Number</label>
                            <input type="text"  value="{{$data->mobile_number}}" class="form-control" value="+91 " maxlength="14" name="mobile_number" placeholder="+91 89878684" />
                            @error('mobile_number')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Address</label>
                            <textarea class="form-control" name="address" placeholder="Company Address">{{$data->address}}</textarea>
                            @error('address')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                         <div class="form-group">
                            <label for="exampleInputEmail1">twitter</label>
                            <input type="text"  value="{{$data->twitter}}" placeholder="twitter" class="form-control"  name="twitter"  />
                            @error('twitter')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                         <div class="form-group">
                            <label for="exampleInputEmail1">facebook</label>
                            <input type="text"  value="{{$data->facebook}}" placeholder="facebook" class="form-control"  name="facebook"  />
                            @error('facebook')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">instagram</label>
                            <input type="text"  value="{{$data->instagram}}" placeholder="instagram" class="form-control"  name="instagram"  />
                            @error('instagram')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">skype</label>
                            <input type="text"  value="{{$data->skype}}" placeholder="skype" class="form-control"  name="skype"  />
                            @error('skype')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                         <div class="form-group">
                            <label for="exampleInputEmail1">linkedin</label>
                            <input type="text"  value="{{$data->linkedin}}" placeholder="linkedin" class="form-control"  name="linkedin"  />
                            @error('linkedin')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                         <div class="form-group">
                            <label for="exampleInputEmail1">maps key</label>
                            <input type="text"  value="{{$data->map_key}}" placeholder="map_key" class="form-control"  name="map_key"  />
                            @error('map_key')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                            <label for="exampleInputEmail1">maps</label>
                        <div class="form-group" style="display: flex;">
                            <input type="text"  value="{{$data->map_ip1}}" style="width: 50%" placeholder="40.7127837" class="form-control "  name="map_ip1"  />
                            <input type="text"  value="{{$data->map_ip2}}" style="width: 50%" placeholder="74.0059413" class="form-control "  name="map_ip2"  />
                            @error('map_ip1')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                            @error('map_ip2')
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
                            <textarea name="terms_conditions"  class="form-control" id="terms">{{$data->terms_conditions}}</textarea>
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
