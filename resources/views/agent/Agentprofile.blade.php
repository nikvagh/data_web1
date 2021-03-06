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
        <!-- <h4>{{ $title }}</h4> -->
        <div class="col-md-12">
            <div class="box mx-auto col-md-6">
                <form role="form" method="post" action="{{ route('agentprofile') }}" enctype="multipart/form-data">
                    <div class="box box-primary">
                        <!-- form start -->

                        @csrf
                        <div class="image-upload" align="center">
                            <label for="file-input">
                                <img src="{{ url('uploads/Profile' ,$users->profile_pic)  }}" id="preview" style="border-radius: 50%; padding: 5px; border: 1px solid; height: 20vh; width: 20vh;" />
                            </label>
                            <input type="hidden" name="id" value="{{Auth::user()->id}}" />
                            <input type="hidden" name="old_img" value="{{$users->profile_pic}}" />
                            <input id="file-input" style="display: none;" onchange="previewImage();" type="file" name="profile_pic" />
                            @error('old_img')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" readonly value="{{Auth::user()->email}}" />
                               
                            </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Business Name</label>
                                <input type="text" class="form-control" name="business_name" value="{{$users->business_name}}" placeholder="Business Name" />
                                @error('business_name')
                                <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Confirm Address</label>
                                <textarea placeholder="Confirm Address" class="form-control" name="address">{{$users->address}}</textarea>
                                @error('address')
                                <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">ABN</label>
                                <input type="text" class="form-control" name="abn" value="{{$users->abn}}" placeholder="ABN" />
                                @error('abn')
                                <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <a href="{{url('agentprofilepdf',$users->agent_id)}}" class="btn btn-warning">PDF</a>
                                <input type="submit" name="submit" style="float: right;" class="btn btn-primary" value="Updata" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
       </div>
    </div>
</section>
            @endsection @section('js')
            <script>
                function previewImage() {
                    var file = document.getElementById("file-input").files;
                    if (file.length > 0) {
                        var fileReader = new FileReader();

                        fileReader.onload = function (event) {
                            document.getElementById("preview").setAttribute("src", event.target.result);
                        };

                        fileReader.readAsDataURL(file[0]);
                    }
                }
            </script>
 
            @endsection

