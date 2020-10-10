@extends('layouts.front')
@section('Breadcrumbs')
<section class="breadcrumbs">

  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>Product Details </h2>
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li>Product Details</li>

      </ol>
    </div>
  </div>

</section><!-- End Breadcrumbs -->
@endsection
@section('content')
<div class="section-bg">
<div class="container">
@if (Session::has('message_s'))
        @include('partials.alert', ['type' => "success",'message'=> Session::get('message_s') ])
        @endif
  </div>
<form method="post" action="{{url('addcart',$data->id)}}">@csrf
  <input type="hidden" name="path" value="{{Request::url()}}">
  <input type="hidden" name="id" value="{{$data->id}}">
  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing section-bg">
    <div class="container" data-aos="fade-up">

      <div align="center">
        <div class="col-lg-6 col-md-12 pricingtop" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <h3>{{$data->name}}</h3>
            <h4><sup>$</sup>{{$data->amount}} <!-- <span> / month</span> -->
            </h4>
            <ul>
              <!--  <li>Aida dere</li>
                <li>Nec feugiat nisl</li> -->
              <!-- <li>Nulla at volutpat dola</li> -->
            </ul>
            <div class="btn-wrap">
              <input type="submit" name="submit" class="btn btn-primary" value="Buy Now">
              <!-- <a href="{{url('addcart',$data->id)}}" class="btn-buy"></a> -->
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Pricing Section -->
</form>
@endsection