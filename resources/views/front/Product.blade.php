@extends('layouts.new')

 @section('content')

<label style="display: none;">
{{$show=1}}
{{$data= DB::table('products')->get()}}</label>


  <main id="main">

    

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>INVESTMENT PLANS</h2>
        </div>

        <div class="row">
 
            @foreach ($data as $value)
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
           <a href="{{url('product_details',$value->id )}}"><button type="button"  id="button{{$show++}}" name="$20000" value="$20000 INVESTMENT PLAN">{{$value->amount}} <br>{{$value->name}}</button></a>
          </div>
    @endforeach

        </div>

      </div>
    </section><!-- End Services Section -->

   

  </main><!-- End #main -->

@endsection