@extends('layouts.new') @section('content')

<!-- start body -->
<section class="card-body">
    <div class="container">
        <h4>{{ $title }}</h4>
        <div class="col-md-12">
            <div class="box mx-auto col-md-6">
        <form role="form" method="post" action="{{ route('addcustomer') }}" enctype="multipart/form-data">
               @csrf
                      <div class="form-group">
 
                                <label for="exampleInputEmail1">customer Name</label>
                                <select class="form-control">
                                    <option hidden="" value="">Select Customer</option>
                                     @foreach ($get as $key)
                                     
                                    <option id='key'>{{ $key->name }}</option>
                                  @endforeach
                                </select>

                              <div id="box" class=" border-dark">
                            
                              </div>
                            </div>
  <button type="button">Load Content</button>
                      


                  

                </form>
            </div>
        </div>
    </div>
</section>


  
@endsection
@section('js')

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#box").load("http://127.0.0.1:8000/agent_commission_data/14", function(responseTxt, statusTxt, jqXHR){
           
        });
    });
});
</script>

@endsection