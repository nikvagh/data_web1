@extends('layouts.new') @section('Breadcrumbs')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Charity</h2>
            <ol>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Charity</li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumbs -->
@endsection @section('content')

<main id="main">
    <div class="signup-form">
        @if(session()->get('success'))
        <div class="alert alert-success" id="msg" role="alert">
            {{ session()->get('success') }}
        </div>
        @endif
        <form method="post" class="form" action="{{ route('Charity') }}">
            @csrf
            <h2>Charity</h2>

            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" id="charity_name" name="charity_name" placeholder="Charity Name" required="required" /></div>
                </div>
            </div>

            <div class="form-group">
                <input type="text" name="name" placeholder="Charity Name" id="name" class="form-control" value="{{ old('name') }}" />
                @error('name')
                <small class="form-text text-left required"> {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="CEO_details" placeholder="CEO Details" id="CEO_details" class="form-control" value="{{ old('CEO_details') }}" />
                @error('CEO_details')
                <small class="form-text text-left required"> {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <textarea name="address" placeholder="Charity Addresss" id="address" class="form-control">{{ old('address') }}</textarea>

                @error('address')
                <small class="form-text text-left required"> {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="business_registration" placeholder="Business Registration" id="business_registration" class="form-control" value="{{ old('business_registration') }}" />
                @error('business_registration')
                <small class="form-text text-left required"> {{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <textarea name="need_funding" placeholder="Why need funding" id="need_funding" class="form-control">{{ old('need_funding') }}</textarea>

                @error('need_funding')
                <small class="form-text text-left required"> {{ $message }}</small>
                @enderror
            </div>
            @if($errors->all())
            <?php
                            $Member_names= old('Member_names');
                         ?>
            <div class="appending_div"></div>
            @foreach($Member_names as $value)
            <div class="form-row">
                <div class="form-group fullwith">
                    <input type="text" name="Member_names[]" placeholder="Member Names" id="Member_names" class="form-control" value="{{$value}}" />
                </div>
            </div>
            @endforeach
           

            @else
             <div class="form-row">
                <div class="form-group" style="width: 100%;">
                    <input type="text" name="Member_names[]" placeholder="Member Names" id="Member_names" class="form-control" value="" />
                    <div class="appending_div"></div>
                    <i class="icofont-plus btn btn-primary add " style="display: inline;"></i>
                    @error('Member_names[]')
                    <small class="form-text text-left required"> {{ $message }}</small>
                    @enderror
                </div>
            </div>
            @endif

            <div class="form-group">
                    <div><label class="form-check-label">
                        Background Check</label></div>  

                            <input type="checkbox" value="yes" name="background_check" class="form-check-inline" /><label class="form-check-label">Yes</label>

                            <input type="checkbox" value="no" name="background_check" class="form-check-inline" /><label class="form-check-label"> No </label>@error('background_check')
                                <small class="form-text text-left required"> The Back ground check will be carried out by local police and local representative field is required.</small>
                                @enderror
</div>  
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                                </div>


                          
                        </label>
                    </label>
                </div>
            </div>
        </form>
    </div>
</main>
                                <!-- End #main -->

                                @endsection @section('js')
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        $(".add").on("click", function () {
                                            var field = ' <div class="form-group fullwith"><input type="text" name="Member_names[]" placeholder="Member Names" id="Member_names" class="form-control"  /></div>';
                                            $(".appending_div").append(field);
                                        });
                                    });
                                </script>
                                @endsection