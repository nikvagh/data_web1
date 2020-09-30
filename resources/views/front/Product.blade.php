@extends('layouts.front')
@section('Breadcrumbs')
<section class="breadcrumbs">

      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Product  </h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
             <li>Product </li>  

          </ol>
        </div>
      </div>

    </section><!-- End Breadcrumbs -->
@endsection
 @section('content')



    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        <!--   <h2>Product</h2> -->
          <h3>Product <!-- <span>Product</span> --></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

<label style="display: none;">
{{$show=0}}
{{$data= DB::table('products')->get()}}

</label>
        <div class="row">
          @foreach ($data as $value)
          <div class="col-lg-3 col-md-6 pricingtop" data-aos="fade-up" data-aos-delay="{{$show+=100}}">   
            <div class="box">
              <h3>{{$value->name}}</h3>
              <h4><sup>$</sup>{{$value->amount}} <!-- <span> / month</span> --></h4>
              <ul>
                <!-- <li>Aida dere</li>
                <li>Nec feugiat nisl</li> -->
                <!-- <li>Nulla at volutpat dola</li> -->
               
              </ul>
              <div class="btn-wrap">
                <a href="{{url('product_details',$value->id )}}" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
@endforeach


       

        </div>

      </div>
    </section><!-- End Pricing Section -->

   



@endsection