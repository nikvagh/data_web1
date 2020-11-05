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

<!-- start body -->
<section class="card-body">
    <div class="container pt-120 pb-120">
        <!-- <h4>{{ $title }}</h4> -->
        <div class="col-md-12">
            <div class="box mx-auto col-md-6">
        <form role="form" method="post" action="{{ route('addcustomer') }}" enctype="multipart/form-data">
               @csrf
                  <div class="form-group">
                            <label for="exampleInputEmail1">customer Name</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="customer Name" />
                            @error('name')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">phone</label>
                            <input type="number" class="form-control" name="phone" value="{{old('phone')}}" placeholder="customer Name" />
                            @error('phone')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                         <div class="form-group">
                            <label for="exampleInputEmail1">email</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}"  placeholder="customer Name" />
                            @error('email')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>
                            
                            <div class="form-group">
                            <label for="exampleInputEmail1"> password</label>
                            <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder=" password" />
                            @error('password')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">confirm password</label>
                            <input type="password" class="form-control" name="confirm_password" value="{{old('confirm_password')}}" placeholder="confirm password" />
                            @error('confirm_password')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                           <div class="form-group">
                            <label for="exampleInputEmail1">ABN</label>
                            <input type="text" class="form-control" name="abn" value="{{old('abn')}}" placeholder="customer Name" />
                            @error('abn')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>


                           <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                          <textarea name="address" class="form-control" placeholder="address">{{old('address')}}</textarea>
                            @error('address')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                   <div class="form-group">
                    
                    <input type="submit" class="btn btn-primary float-right" value="ADD" >
                  </div>

                </form>
            </div>
        </div>
    </div>
</section>

<!-- end body -->















  
@endsection