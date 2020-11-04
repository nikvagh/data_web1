@extends('layouts.new_pro')

 @section('content')

<label style="display: none;">

{{$data= DB::table('products')->get()}}</label>


  <!-- inner-page-banner-section start -->

  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/investment.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">

                    <h2 class="page-title">Investment</h2>

                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="home-one.html">Home</a></li>

                            <li class="breadcrumb-item">Investment</li>

                        </ol>

                    </nav>

                </div>

            </div>

        </div>

    </div>

  </section>

  <!-- inner-page-banner-section end -->



  <section class="investment-section pb-120">

    <div class="container">

      <div class="row">

        <div class="col-lg-12">

          <div class="main-area">

            <h2 class="title">Investment opportunities</h2>

            <div class="filter-area">

              <div class="filter-left">

                <a href="#0" class="item-view-btn grid-view active"><i class="fa fa-th"></i></a>

                <a href="#0" class="item-view-btn list-view"><i class="fa fa-bars"></i></a>

                <div class="result-show-number">

                  <span>Show :</span>

                  <select>

                    <option>10</option>

                    <option>20</option>

                    <option>30</option>

                    <option>40</option>

                    <option>50</option>

                  </select>

                </div>

              </div>

<!--               <div class="filter-right">

                <select>

                  <option>All</option>

                  <option>Category one</option>

                  <option>Category Two</option>

                  <option>Category Three</option>

                  <option>Category Four</option>

                  <option>Category Five</option>

                </select>

                <select>

                  <option>Trending</option>

                  <option>Category one</option>

                  <option>Category Two</option>

                  <option>Category Three</option>

                  <option>Category Four</option>

                  <option>Category Five</option>

                </select>

              </div> -->

            </div>

            <div class="row mt-4 mb-none-30 investment-item-area">

 @foreach ($data as $value)
              <div class="col-lg-6 investment-item">
    <div class="investment-single mb-30">
        <!--  <div class="thumb  bg_img" >

                    <div class="icon"><img src="{{ url('new_front_asset/images/icons/investment/1.png') }}" alt="image"></div>

                  </div> -->

        <div class="content">
            <div class="left">
                <h3 class="investment-title">{{$value->name}}</h3>

                <!-- <p>Litecoin is a peer-to-peer cryptocurrency and open source software project</p> -->

                <div class="share-price"><h3 class="price">${{$value->amount}}</h3></div>
                      <a href="{{url('product_details',$value->id )}}" class="btn btn-primary btn-hover text-small">invest now</a>


                <!--        <div class="d-flex flex-wrap mt-5"> 

                        <div class="icon-item d-flex flex-wrap">

                          <div class="icon"><i class="icofont-ui-user-group"></i></div>

                          <div class="content">

                            <span class="counter">442</span>

                            <p>investors</p>

                          </div>

                        </div>
                        <div class="icon-item d-flex flex-wrap">

                          <div class="icon"><i class="icofont-wall-clock"></i></div>

                          <div class="content">

                            <span class="counter">48</span><span>Days</span>

                            <p>Time Remaining</p>

                          </div>

                        </div>
                      </div> -->
            </div>
        </div>
    </div>
</div>


@endforeach


                    </div>



                  </div>

                </div>

              </div><!-- investment-single end -->

     
           
            </div>

  

          </div>

        </div>

      </div>

    </div>

  </section>



@endsection