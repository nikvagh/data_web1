@extends('layouts.new_pro') @section('content')
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
<section class="card-body">
    <div class="container pt-120 pb-120">
    
 <!--    <div class="container">
        <h4>{{ $title }}</h4> -->
        <div class="col-md-12 d-flex">
            <div class="box mx-auto col-md-6">
        <form role="form" method="post" action="{{ route('settings') }}">
      
                <div class="box box-primary">
                
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
                            <label for="exampleInputEmail1">Copyright Text</label>
                            <input type="text"  value="{{$data->copyright}}" placeholder="copyright" class="form-control"  name="copyright"  />
                            @error('copyright')
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
                        <label class="box-title">Terms And Conditions</label>
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
