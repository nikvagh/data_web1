@extends('layouts.agent_dash') @section('content')
<style type="text/css">
    .image-upload>input {
  display: none;
}
</style>
<section class="content">
    <div class="row">
        <form role="form" method="post" action="{{ route('membershiprenew') }}" enctype="multipart/form-data">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Renew Membership</h3>
                    </div>
                    @csrf
                  
                 
                    <div class="box-body">

                         <div class="form-group">
                            <label for="exampleInputEmail1">Select Plan</label>
                            <select class="form-control" name="amount">
                                <option hidden value="">Select Plan</option>
                                <option>1000</option>
                            </select>
                            @error('amount')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>

                      

                            

                        <div class="form-group">
                         
                            <input type="submit" name="submit" style="float: right;" class="btn btn-primary" value="Renew" />
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
  
@endsection