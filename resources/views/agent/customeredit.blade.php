@extends('layouts.agent_dash') @section('content')
<style type="text/css">
    .image-upload>input {
  display: none;
}
</style>
<section class="content">
    <div class="row">
        <form role="form" method="post" action="{{ route('customerupdate') }}" enctype="multipart/form-data">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Edit customary</h3>
                    </div>
                    @csrf
                  
                 
                    <div class="box-body">
                    	<input type="hidden" name="id" value="{{$get[0]->customer_id }}">
                         <div class="form-group">
                            <label for="exampleInputEmail1">customary Name</label>
                            <input type="text" class="form-control" name="name" value="{{$get[0]->name}}" placeholder="Customary Name" />
                            @error('name')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">phone</label>
                            <input type="number" class="form-control" name="phone" value="{{$get[0]->phone}}" placeholder="Customary Name" />
                            @error('phone')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                         <div class="form-group">
                            <label for="exampleInputEmail1">email</label>
                            <input type="email" class="form-control" name="email" value="{{$get[0]->email}}"  placeholder="Customary Name" />
                            @error('email')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>
                            
                          

                           <div class="form-group">
                            <label for="exampleInputEmail1">ABN</label>
                            <input type="text" class="form-control" name="abn" value="{{$get[0]->abn}}" placeholder="Customary Name" />
                            @error('abn')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>


                           <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                          <textarea name="address" class="form-control" placeholder="address">{{$get[0]->address}}</textarea>
                            @error('address')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                            

                        <div class="form-group">
                         
                            <input type="submit" name="submit" style="float: right;" class="btn btn-primary" value="Update" />
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
  
@endsection