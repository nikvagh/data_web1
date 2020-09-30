
@extends('layouts.front')
 @section('Breadcrumbs')
<section class="breadcrumbs">

      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Charity </h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
             <li>Charity</li>  

          </ol>
        </div>
      </div>

    </section><!-- End Breadcrumbs -->
@endsection
 @section('content')

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing white-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <div class="col-lg-6">
                <div class="contact">
                         <form method="post" class="form" action="{{ route('Charity') }}">
                         @csrf
                        <div class="form-row">
                            <div class="form-group fullwith">
                                <input type="text" name="name" placeholder="Charity Name" id="name" class="form-control" value="{{ old('name') }}" />
                           @error('name')
                            <small class="form-text text-left required" > {{ $message }}</small>
                            @enderror
                            </div>
                        </div>

                          <div class="form-row">
                            <div class="form-group fullwith">
                                <input type="text" name="CEO_details" placeholder="CEO Details" id="CEO_details" class="form-control" value="{{ old('CEO_details') }}" />
                           @error('CEO_details')
                            <small class="form-text text-left required" > {{ $message }}</small>
                            @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group fullwith">
                                <textarea name="address" placeholder="Charity Addresss" id="address" class="form-control">{{ old('address') }}</textarea>
                               
                           @error('address')
                            <small class="form-text text-left required" > {{ $message }}</small>
                            @enderror
                            </div>
                        </div>

                         <div class="form-row">
                            <div class="form-group fullwith">
                                <input type="text" name="business_registration" placeholder="Business Registration" id="business_registration" class="form-control" value="{{ old('business_registration') }}" />
                           @error('business_registration')
                            <small class="form-text text-left required" > {{ $message }}</small>
                            @enderror
                            </div>
                        </div>
                       
                      
                        
                        <div class="form-row">
                            <div class="form-group fullwith">
                                <textarea name="need_funding" placeholder="Why need funding" id="need_funding" class="form-control">{{ old('need_funding') }}</textarea>
                               
                           @error('need_funding')
                            <small class="form-text text-left required" > {{ $message }}</small>
                            @enderror
                            </div>
                        </div>

                         <div class="form-row">
                            <div class="form-group fullwith">
                            <div class="appending_div"></div>
                                <input type="text" name="Member_names[]" placeholder="Member Names" id="Member_names" class="form-control" value="" />
                            <i class="icofont-plus btn btn-primary add flortright"></i>
                           @error('Member_names[]')
                            <small class="form-text text-left required" > {{ $message }}</small>
                            @enderror
                            </div>
                        </div>


                         <div class="form-row ">
                            <div class="form-group fullwith text-left">
                                <label>Background Check</label><br>
                             <input type="checkbox" value="yes" name="background_check"  class="form-check-inline"><label class="form-check-label" for="exampleCheck1">Yes</label>
                              <input type="checkbox" value="no" name="background_check"  class="form-check-inline"><label class="form-check-label" for="exampleCheck1">No</label>
                         </div>
                                  
                           @error('background_check')
                            <small class="form-text text-left required" > {{ $message }}</small>
                            @enderror
                           
                        </div>

                        

                        <div class="text-center"><button name="submit" class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
        @endsection

@section('js')
<script type="text/javascript">
$(document).ready(function() {

  $('.add').on('click', function() {
    var field = ' <div class="form-group fullwith"><input type="text" name="Member_names[]" placeholder="Member Names" id="Member_names" class="form-control"  /></div>';
    $('.appending_div').append(field);
   
  })
})
</script>
 @endsection