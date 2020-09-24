@extends('layouts.agent_dash') @section('content')
<style type="text/css">
    .image-upload>input {
  display: none;
}
</style>
<section class="content">
    <div class="row">
        <form role="form" method="post" action="{{ route('agentprofile') }}" enctype="multipart/form-data">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Add New customary</h3>
                    </div>
                    @csrf
                  
                 
                    <div class="box-body">

                         <div class="form-group">
                            <label for="exampleInputEmail1">customary Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="Customary Name" />
                            @error('name')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">phone</label>
                            <input type="number" class="form-control" name="phone"  placeholder="Customary Name" />
                            @error('phone')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                         <div class="form-group">
                            <label for="exampleInputEmail1">email</label>
                            <input type="number" class="form-control" name="email"  placeholder="Customary Name" />
                            @error('email')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">password</label>
                            <input type="number" class="form-control" name="password"  placeholder="Customary Name" />
                            @error('password')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group">
                         
                            <input type="submit" name="submit" style="float: right;" class="btn btn-primary" value="ADD" />
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
  
@endsection