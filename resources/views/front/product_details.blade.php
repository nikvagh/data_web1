@extends('layouts.new_pro') @section('content')

<!-- inner-page-banner-section start -->

<section class="inner-page-banner-section gradient-bg">
    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/investment.png') }}" alt="image-illustration" /></div>

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

<section class="single-investment-section">
    <div class="container">
        <div class="row">

                        	<form method="post" action="{{url('addcart',$data->id)}}">@csrf
            <div class="col-lg-12">

                <div class="main-area">
                    <div class="row  pb-120">
                        <div class="col-xl-6">
							  <input type="hidden" name="path" value="{{Request::url()}}">
							  <input type="hidden" name="id" value="{{$data->id}}">
							   @if (Session::has('message_s'))
        @include('partials.alert', ['type' => "success",'message'=> Session::get('message_s') ])
        @endif
                            <div class="invest-thumb">

                                <img src="{{ url('new_front_asset/images/elements/contest.png') }}" alt="image" />

                            </div>
                        </div>

                        <div class="col-xl-6 mt-xl-0 mt-4">
                            <div class="investment-content">
                                <h3 class="title text-uppercase">{{$data->name}}</h3>

                              <!--   <div class="d-flex flex-wrap">
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

                                <p>
                                    Litecoin is a peer-to-peer Internet currency that enables instant, near-zero cost payments to anyone in the world. Litecoin is an open source, global payment network that is fully decentralized without
                                    any central authorities.
                                </p>
                                  <div class="share-order-part">
                                <div class="single-share">
                                    <h3 class="single-share-price">${{$data->amount}}</h3>

                                    <!-- <p>per share</p> -->
                                </div>

                               <!--  <div class="share-count">
                                    <input readonly type="number" min="0" max="100" step="1" value="1" />
                                </div> -->

                                <div class="cart-btn-area">
                                	<input type="submit" name="submit" value="add to cart" class="btn btn-primary btn-round">
                                    <!-- <a class="btn btn-primary btn-round">add to cart</a> -->
                                </div>
                            </div>
                            </div>
                            <!-- investment-content end -->
                        </div>

                        <div class="col-xl-6">
                    <!--         <div class="profit-calculator">
                                <h4 class="title text-uppercase">Profit Calculation</h4>

                                <div class="calculator-area">
                                    <div class="profit-calculator-area d-flex flex-wrap">
                                        <div class="calculator-item">
                                            <div class="main-amount">
                                                <input type="text" class="calculator-invest" id="profit-amount" readonly />
                                            </div>

                                            <div class="calculate">
                                                <div id="profit-slider-range" class="invest-range-slider"></div>

                                                <div class="amount-area">
                                                    <div class="starting-amount">
                                                        <span>$05</span>
                                                    </div>

                                                    <div class="hightest-amount">
                                                        <span>$100,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="calculator-item">
                                            <div class="main-amount">
                                                <input type="text" class="calculator-invest" id="month-amount" readonly />
                                            </div>

                                            <div class="calculate">
                                                <div id="profit-slider-range-month" class="invest-range-slider"></div>

                                                <div class="amount-area">
                                                    <div class="starting-amount">
                                                        <span>1 Month</span>
                                                    </div>

                                                    <div class="hightest-amount">
                                                        <span>24 Months</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="return-area">
                                        <span class="return-amount">$1,114</span>

                                        <p>your return</p>
                                    </div>
                                </div>
                            </div> -->
                            <!-- profit-calculator end -->
                        </div>

                        <div class="col-xl-6">
       <!--                      <div class="shares-part">
                                <div class="share-item">
                                    <span class="caption">Weekly Dividend</span>

                                    <h4 class="amount">$0.25</h4>
                                </div>
                               

                                <div class="share-item">
                                    <span class="caption">Annual Return</span>

                                    <h4 class="amount">428.57%</h4>
                                </div>
                             

                                <div class="share-item">
                                    <span class="caption">Total Shares</span>

                                    <h4 class="amount">9,674</h4>
                                </div>
                            
                            </div> -->
                          

                          

                        <!--     <ul class="social-share-links">
                                <li>Share Links:</li>

                                <li>
                                    <a href="#0"><i class="fa fa-facebook-f"></i></a>

                                    <a href="#0"><i class="fa fa-twitter"></i></a>

                                    <a href="#0"><i class="fa fa-pinterest-p"></i></a>

                                    <a href="#0"><i class="fa fa-rss"></i></a>
                                </li>
                            </ul> -->
                        </div>
                    </div>

                  
                </div>
            </div>
</form>        </div>
    </div>
</section>

                        @endsection