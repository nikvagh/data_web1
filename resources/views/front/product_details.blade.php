@extends('layouts.front')
 @section('content')



    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

       

        
          <div align="center">
          <div class="col-lg-6 col-md-12 pricingtop" data-aos="fade-up" data-aos-delay="100">   
            <div class="box">
              <h3>{{$data->name}}</h3>
              <h4><sup>$</sup>{{$data->amount}} <!-- <span> / month</span> --></h4>
              <ul>
               <!--  <li>Aida dere</li>
                <li>Nec feugiat nisl</li> -->
                <!-- <li>Nulla at volutpat dola</li> -->
               
              </ul>
              <div class="btn-wrap">
                <a href="{{url('addcart',$data->id)}}" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

</div>
       


      </div>
    </section><!-- End Pricing Section -->

   



@endsection