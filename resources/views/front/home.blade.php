@extends('layouts.new_pro')
 @section('content')

  <!-- banner-section start -->

  <section class="banner-section">

    <div class="banner-elements-image anim-bounce"><img src="{{ url('new_front_asset/images/elements/banner.png') }}" alt="image"></div>

    <div class="container">

      <div class="row">

        <div class="col-xl-8">

          <div class="banner-content-area">

            <div class="banner-content">

              <span class="banner-sub-title">Get Ultimate Profit</span>

              <h2 class="banner-title" >Build Your Future With Investments</h2>

              <p>We are worldwide investment company who are committed to the principle of revenue maximization & reduction of the financial risks at investing.</p>

            </div>

            <div class="banner-btn-area">

              <a href="#0" class="btn btn-primary btn-round">get started now!</a>

              <a href="https://www.youtube.com/embed/aFYlAzQHnY4" data-rel="lightcase:myCollection" class="video-btn">

                <span class="icon"><i class="icofont-ui-play"></i></span>

                <span class="text">watch video</span>

              </a>

            </div>

        </div>

      </div>

    </div>

    </div>

  </section>

  <!-- banner-section end -->



  <div class="counter-sections">

    <div class="container">

      <div class="row">

        <div class="col-lg-12">

          <div class="counter-area d-flex justify-content-between">

            <div class="counter-item">

              <div class="counter-icon">

                <img src="{{ url('new_front_asset/images/icons/counter/1.svg') }}" alt="icon">

              </div>

              <div class="counter-content">

                <span>$</span>

                <span class="counter">961</span>

                <span>k</span>

                <span class="caption">Invested in Pitches</span>

              </div>

            </div><!-- counter-item end -->

            <div class="counter-item">

              <div class="counter-icon">

                <img src="{{ url('new_front_asset/images/icons/counter/2.svg') }}" alt="icon">

              </div>

              <div class="counter-content">

               

                <span class="counter">{{ $UsersCount }}</span>

                

                <span class="caption">Registered Members</span>

              </div>

            </div><!-- counter-item end -->

            <div class="counter-item">

              <div class="counter-icon">

                <img src="{{ url('new_front_asset/images/icons/counter/3.svg') }}" alt="icon">

              </div>

              <div class="counter-content">

                

                <span class="counter">{{ number_format(($Investment->sum('amount')/$UsersCount)/1000) }} </span><span>k</span>

            

                <span class="caption">Average Investment</span>

              </div>

            </div><!-- counter-item end -->

          </div>

        </div>

      </div>

    </div>

  </div>




  <!-- counter-section end -->



  <!-- choose-us-section start -->

 

  <!-- choose-us-section end -->



  <!-- features-section start -->

  <section class="features-section pt-120 pb-120 section-md-bg">

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-8">

          <div class="section-header text-center">

            <span class="section-subtitle">Our Amazing Features</span>

            <h2 class="section-title">Investing For Everyone</h2>

            <p>We are worldwide investment company who are committed to the principle of revenue maximization and reduction of the financial risks at investing.</p>

          </div>

        </div>

      </div>

    </div>

    <div class="container-fluid">

      <div class="row">

        <div class="col-xl-4">

          <div class="feature-thumb anim-bounce">

            <img src="{{ url('new_front_asset/images/elements/features.png') }}" alt="image">

          </div>

        </div>

        <div class="col-xl-4 offset-md-1 feature-item-wrapper">

          <div class="feature-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">

            <div class="icon">

              <div class="icon-inner">

                <img src="{{ url('new_front_asset/images/icons/investment/1.svg') }}" alt="icon">

              </div>

            </div>

            <div class="content">

              <h3 class="title">Sign up in minutes</h3>

              <p>Open an investment account in minutes and get started with as little as $5.</p>

              <a href="{{ url('/customer_register') }}">get strated</a>

            </div>

          </div><!-- feature-item end -->

          <div class="feature-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">

            <div class="icon">

              <div class="icon-inner">

                <img src="{{ url('new_front_asset/images/icons/investment/2.svg') }}" alt="icon">

              </div>

            </div>

            <div class="content">

              <h3 class="title">Investing Made Easy</h3>

              <p>Choose from three simple starting option - cautious , balanced & adventurous.We’ll take care of the rest!</p>

              <a href="#0">read more</a>

            </div>

          </div><!-- feature-item end -->

          <div class="feature-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.7s">

            <div class="icon">

              <div class="icon-inner">

                <img src="{{ url('new_front_asset/images/icons/investment/3.svg') }}" alt="icon">

              </div>

            </div>

            <div class="content">

              <h3 class="title">Build Your Porfolio</h3>

              <p>We’ll help you pick an investment strategy that reflects your interests,beliefs and goals.</p>

              <a href="#0">explore our investing </a>

            </div>

          </div><!-- feature-item end -->

        </div>

      </div>

    </div>

  </section>

  <!-- features-section end -->



  <!-- invest-section start -->

  <section class="invest-section pt-120 pb-120 bg_img" data-background="{{ url('new_front_asset/images/bg-1.png') }}">

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-12">

          <div class="section-header text-center text-white">

            <span class="section-subtitle">The smarter way to invest!</span>

            <h2 class="section-title">Start investing! It’s never too late</h2>

            <p>Make sound investment decisions with the help of our research & analytical assets.The minimum  deposit is $5, and maximum is $100,000. We pay 7 days per week.  You may make additional deposits at any time. All our payments are instant payments.</p>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-lg-12">

          <div class="invest-table-area wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">

            <table>

              <thead>

                <tr>

                  <th>share</th>

                  <th>price</th>

                  <th class="text-right">invest now</th>

                </tr>

              </thead>

              <tbody>
@foreach ($products as $key)
                <tr>

                  <td>

                    <div class="person-details">

                      <!-- <div class="thumb"><img src="{{ url('new_front_asset/images/invest/1.png') }}" alt="image"></div> -->

                      <div class="content">

                        <span class="name">{{$key->name}}</span>

                      </div>

                    </div>

                  </td>

                  <td>

                    <span class="price">{{$key->amount}}</span>

                  </td>



                  <td>

                 

                    <a href="{{ url('/product_details',$key->id) }}" class="btn btn-primary btn-round pull-right">invest now</a>

                  </td>

                </tr>
@endforeach
         

              </tbody>

            </table>

          </div>

          <div class="btn-area mt-50 text-center">

            <a href="{{ url('product') }}" class="btn btn-primary btn-hover text-small">browse more</a>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- invest-section end -->



  <!-- offer-section start -->

  <section class="offer-section pt-120 pb-120 bg_img" data-background="{{ url('new_front_asset/images/offer-bg.png') }}">

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-8">

          <div class="section-header text-center wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">

            <span class="section-subtitle">Our mission is to help our User</span>

            <h2 class="section-title">To Maximize Money</h2>

            <a href="#0" class="btn btn-primary btn-hover mt-30">what we offer</a>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-lg-12">

          <div class="offer-slider owl-carousel">

            <div class="offer-item">

              <div class="icon">

                <img src="{{ url('new_front_asset/images/icons/offer/1.svg') }}" alt="icon">

              </div>

              <div class="content">

                <h3 class="title">smart deposit</h3>

                <p>Best way t o put your idle money to work.</p>

                <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a>

              </div>

            </div><!-- offer-item end -->

            <div class="offer-item">

              <div class="icon">

                <img src="{{ url('new_front_asset/images/icons/offer/2.svg') }}" alt="icon">

              </div>

              <div class="content">

                <h3 class="title">One - Tap Invest</h3>

                <p>Invest without net baning/debit card.</p>

                <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a>

              </div>

            </div><!-- offer-item end -->

            <div class="offer-item">

              <div class="icon">

                <img src="{{ url('new_front_asset/images/icons/offer/3.svg') }}" alt="icon">

              </div>

              <div class="content">

                <h3 class="title">invest & saving</h3>

                <p>Grow your saving by investing as little as $5</p>

                <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a>

              </div>

            </div><!-- offer-item end -->

            <div class="offer-item">

              <div class="icon">

                <img src="{{ url('new_front_asset/images/icons/offer/1.svg') }}" alt="icon">

              </div>

              <div class="content">

                <h3 class="title">smart deposit</h3>

                <p>Best way t o put your idle money to work.</p>

                <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a>

              </div>

            </div><!-- offer-item end -->

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- offer-section end -->



  <!-- calculate-profit-section start -->

  <section class="calculate-profit-section pt-120 pb-120">

    <div class="bg_img" data-background="{{ url('new_front_asset/images/invest-plan.jpg') }}"></div>

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-8">

          <div class="section-header text-center text-white">

            <span class="section-subtitle">Calculate the amazing profits</span>

            <h2 class="section-title">You Can Earn</h2>

            <p>Find out what the returns on your current investments will be valued at, in future. All our issuers have obligation to pay dividends for first year regardless their financial situation that your investments are 100% secured. Calculate your profit from a share using our calculator:</p>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-lg-12">

          <div class="calculate-area wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">

            <ul class="nav nav-tabs justify-content-around" id="calculatorTab" role="tablist">
<!-- 
              <li>

                <div class="icon"><img src="{{ url('new_front_asset/images/icons/invest-calculate/1.svg') }}" alt="icon-image"></div>

                <h5 class="package-name">Basic Plan</h5>

                <span class="percentage">2%</span>

                <a class="active" id="basic-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="basic" aria-selected="true">calculate</a>

              </li>

              <li>

                  <div class="icon"><img src="{{ url('new_front_asset/images/icons/invest-calculate/2.svg') }}" alt="icon-image"></div>

                  <h5 class="package-name">satandard Plan</h5>

                  <span class="percentage">3%</span>

                <a id="satandard-tab" data-toggle="tab" href="#satandard" role="tab" aria-controls="satandard" aria-selected="false">calculate</a>

              </li>

              <li>

                  <div class="icon"><img src="{{ url('new_front_asset/images/icons/invest-calculate/3.svg') }}" alt="icon-image"></div>

                  <h5 class="package-name">premium Plan</h5>

                  <span class="percentage">2%</span>

                <a id="premium-tab" data-toggle="tab" href="#premium" role="tab" aria-controls="premium" aria-selected="false">calculate</a>

              </li> --><!-- 
              <li>
                <div class="icon2"></div>
              </li> -->

            </ul>

            <div class="tab-content" id="calculatorTabContent">

              <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">

                <div class="invest-amount-area text-center calc-box">

                  <h4 class="title">Invest Amount</h4>

                  <div class="main-amount">

                    <input type="text" class="calculator-invest" id="basic-amount" onChange="function_name()" readonly>
                    <div class="col-md-6">
                    <div class="filter-right ">
                    <select id="earning_type">
                      <option hidden>Select Earning type</option>
                      <option value="percent">percent (%)</option>
                      <option value="fixed_runt">Fixed Runt</option>
                    </select></div>

                  </div>
                  <div class="form-group">
                </div></div>

                  <div id="slider-range-min-one" class="invest-range-slider"></div>

                </div><!-- invest-amount-area end -->

                <div class="plan-amount-calculate">

               <!--    <div class="item">

                    <span class="caption">Basic plan</span>

                    <span class="details">Minimum Deposit $5</span>

                  </div> -->

                  <div class="item">

                    <span class="profit-amount" id="dailyProfit">$12.67</span>

                    <span class="profit-details">Daily Profit</span>

                  </div>

                  <div class="item">

                    <span class="profit-amount" id="monthlyProfit">$12.67</span>

                    <span class="profit-details">per month</span>

                  </div>

                  <div class="item">

                    <a href="{{ url('product') }}" class="invest-btn btn-round">invest now</a>

                  </div>

                </div><!-- plan-amount-calculate end -->

              </div>


            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- calculate-profit-section end -->



  <!-- deposit-withdraw-section start -->

  <section class="deposit-withdraw-section pt-120 pb-120 section-md-bg">

    <div class="circle-object"><img src="{{ url('new_front_asset/images/elements/deposit-circle-shape.png') }}" alt="image"></div>

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-8">

          <div class="section-header text-center">

            <span class="section-subtitle">Convenient money</span>

            <h2 class="section-title">Deposit & Withdrawal</h2>

            <p>Depositing or withdrawing money is simple.We support several payment methods, which depend on what country your payment account is located in.</p>

          </div>

        </div>

      </div>

      <div class="row align-items-center">

        <div class="col-lg-6">

          <div class="dep-wth-option-area wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">

            <span class="circle one"></span>

            <span class="circle two"></span>

            <span class="circle three"></span>

            <span class="circle four"></span>

            <a href="#0" class="card-item">

              <span class="icon"><img src="{{ url('new_front_asset/images/icons/payment-option/card.svg') }}" alt="image"></span>

              <span class="caption">Credit Card</span>

            </a><!-- card-item end -->

            <a href="#0" class="card-item">

              <span class="icon"><img src="{{ url('new_front_asset/images/icons/payment-option/paypal.svg') }}" alt="image"></span>

              <span class="caption">Credit Card</span>

            </a><!-- card-item end -->

            <a href="#0" class="card-item">

              <span class="icon"><img src="{{ url('new_front_asset/images/icons/payment-option/bitcoin.svg') }}" alt="image"></span>

              <span class="caption">Credit Card</span>

            </a><!-- card-item end -->

            <a href="#0" class="card-item">

              <span class="icon"><img src="{{ url('new_front_asset/images/icons/payment-option/litecoin.svg') }}" alt="image"></span>

              <span class="caption">Credit Card</span>

            </a><!-- card-item end -->

            <a href="#0" class="card-item">

              <span class="icon"><img src="{{ url('new_front_asset/images/icons/payment-option/ethereum.svg') }}" alt="image"></span>

              <span class="caption">Credit Card</span>

            </a><!-- card-item end -->

            <a href="#0" class="card-item">

              <span class="icon"><img src="{{ url('new_front_asset/images/icons/payment-option/ripple.svg') }}" alt="image"></span>

              <span class="caption">Credit Card</span>

            </a><!-- card-item end -->

            <a href="#0" class="text-btn">view all option</a>

          </div>

        </div>

        <div class="col-lg-6">

          <div class="feature-item">

            <div class="icon">

              <div class="icon-inner">

                <img src="{{ url('new_front_asset/images/icons/payment-option/ft1.svg') }}" alt="icon">

              </div>

            </div>

            <div class="content">

              <h3 class="title">No Limits</h3>

              <p>Unlimited maximum withdrawal amount</p>

            </div>

          </div><!-- feature-item end -->

          <div class="feature-item">

            <div class="icon">

              <div class="icon-inner">

                <img src="{{ url('new_front_asset/images/icons/payment-option/ft2.svg') }}" alt="icon">

              </div>

            </div>

            <div class="content">

              <h3 class="title">Withdrawal in 24 /7</h3>

              <p>Deposit – instantaneous</p>

            </div>

          </div><!-- feature-item end -->

        </div>

      </div>

    </div>

  </section>

  <!-- deposit-withdraw-section end -->



  <!-- community-section start -->

  <section class="community-section bg_img pt-120" data-background="{{ url('new_front_asset/images/community-bg.png') }}">

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-10">

          <div class="section-header text-center text-white wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">

            <span class="section-subtitle">We support</span>

            <h2 class="section-title">Cryptocurrency Community</h2>

            <p>Access a world of dynamic investment opportunities, buy into businesses you believe in and share in their  success.You may make additional deposits at any time. All our 

              payments are instant payments.</p>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-lg-12">

          <div class="community-wrapper">

            <div class="row">

              <div class="col-lg-7">

                <div class="community-item">

                  <div class="icon">

                    <img src="{{ url('new_front_asset/images/icons/community/1.svg') }}" alt="image">

                  </div>

                  <div class="content">

                    <h3 class="title">Simplicity</h3>

                    <p>We’re eliminating complex user experiences.</p>

                    <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a>

                  </div>

                </div><!-- community-item end -->

                <div class="community-item">

                  <div class="icon">

                    <img src="{{ url('new_front_asset/images/icons/community/2.svg') }}" alt="image">

                  </div>

                  <div class="content">

                    <h3 class="title">security</h3>

                    <p>Enhanced security features like multi-factor </p>

                    <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a>

                  </div>

                </div><!-- community-item end -->

                <div class="community-item">

                  <div class="icon">

                    <img src="{{ url('new_front_asset/images/icons/community/3.svg') }}" alt="image">

                  </div>

                  <div class="content">

                    <h3 class="title">support</h3>

                    <p>Get all the support you need for your Investment</p>

                    <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a>

                  </div>

                </div><!-- community-item end -->

              </div>

              <div class="col-lg-5">

                <div class="user-wrapper">

                  <div class="icon">

                    <img src="{{ url('new_front_asset/images/icons/community/user-icon.svg') }}" alt="image">

                  </div>

                  <span class="caption">18000+ Users</span>

                  <div class="users-area">

                    <span class="user-img"><img src="{{ url('new_front_asset/images/users/s1.png') }}" alt="image"></span>

                    <span class="user-img"><img src="{{ url('new_front_asset/images/users/s2.png') }}" alt="image"></span>

                    <span class="user-img"><img src="{{ url('new_front_asset/images/users/s3.png') }}" alt="image"></span>

                    <span class="user-img"><img src="{{ url('new_front_asset/images/users/s4.png') }}" alt="image"></span>

                    <span class="user-img"><img src="{{ url('new_front_asset/images/users/s5.png') }}" alt="image"></span>

                    <span class="user-img"><img src="{{ url('new_front_asset/images/users/s6.png') }}" alt="image"></span>

                    <span class="user-img"><img src="{{ url('new_front_asset/images/users/s7.png') }}" alt="image"></span>

                    <a href="#" class="btn btn-primary btn-round">see all</a>

                  </div>

                </div>

                <div class="btn-area text-center">

                  <a href="{{ url('customer_register') }}" class="btn btn-secondary">join us</a>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div> 

    </div>

  </section>

  <!-- community-section end -->



  <!-- latest-transaction-section start -->

  <section class="latest-transaction-section pt-120 pb-120">

    <div class="elemets-bg" data-paroller-factor="-0.2" data-paroller-type="foreground" data-paroller-direction="vertical"><img src="{{ url('new_front_asset/images/withdraw-bg.png') }}" alt=""></div>

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-8">

          <div class="section-header text-center">

            <span class="section-subtitle">Latest Transaction</span>

            <h2 class="section-title">Withdrawals</h2>

            <p>Our goal is to simplify investing so that anyone can be an investor.Withthis in mind, we  hand-pick the investments we offer on our platform.</p>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-lg-12">

          <ul class="nav nav-tabs justify-content-center tab-nav" id="transactionTab" role="tablist">

            <li class="nav-item">

              <a class="nav-link " id="daily-tab" data-toggle="tab" href="#daily" role="tab" aria-controls="daily" aria-selected="true">Daily</a>

            </li>

            <li class="nav-item">

              <a class="nav-link active" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a>

            </li>

          </ul>

          <div class="tab-content" id="transactionTabContent">

            <div class="tab-pane fade" id="daily" role="tabpanel" aria-labelledby="daily-tab">

              <div class="withdraw-table-area">

                <table>

                  <thead>

                    <tr>

                      <th>Name</th>

                      <th>AMOUNTS</th>

                    

                     
                      <th>Currency</th>

                    </tr>

                  </thead>


                  <tbody>
   @if(!count($transactionsbyday)==0)
            @foreach ($transactionsbyday as $key)


                    <tr>
                      <td  data-head="name">
                        <div class="person-details">
                          <div class="thumb">@if($key->profile_pic)<img src="{{ url('uploads/Profile',$key->profile_pic) }}" alt="image">@else <img src="{{ url('uploads/Profile/images.png') }}" alt="image"> @endif </div>
                          <div class="content">
                            <span class="name">{{ $key->business_name}}</span>
                          </div>
                        </div>
                      </td>

                      <td data-head="amounts">

                        <span class="amount">{{$key->amount}}</span>

                      </td>

                     

                      <td data-head="Currency">

                        <img src="{{ url('new_front_asset/images/icons/withdraw/dollar.png') }}" alt="icon">

                      </td>

                    </tr>
              @endforeach
@else
<tr>
  <td colspan="3" class="text-center">Data is Empty. </td>
</tr>

@endif
                  </tbody>

                </table>

              </div>

            </div>

            

            <div class="tab-pane fade  show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">

              <div class="withdraw-table-area">


                <table>

                  <thead>

                    <tr>

                      <th>Name</th>

                      <th>AMOUNTS</th>

                    

                     
                      <th>Currency</th>

                    </tr>

                  </thead>


                  <tbody>
   @if(!count($transactionsbymonth)==0)
            @foreach ($transactionsbymonth as $key)


                    <tr>
                      <td  data-head="name">
                        <div class="person-details">
                          <div class="thumb">@if($key->profile_pic)<img src="{{ url('uploads/Profile',$key->profile_pic) }}" alt="image">@else <img src="{{ url('uploads/Profile/images.png') }}" alt="image"> @endif </div>
                          <div class="content">
                            <span class="name">{{ $key->business_name}}</span>
                          </div>
                        </div>
                      </td>

                      <td data-head="amounts">

                        <span class="amount">{{$key->amount}}</span>

                      </td>

                     

                      <td data-head="Currency">

                        <img src="{{ url('new_front_asset/images/icons/withdraw/dollar.png') }}" alt="icon">

                      </td>

                    </tr>
              @endforeach
@else
<tr>
  <td colspan="3" class="text-center">Data is Empty. </td>
</tr>

@endif
                  </tbody>

                </table>
              </div>

            </div>

          </div>

          

          <div class="btn-area text-center">

            <a href="#0" class="btn btn-primary btn-hover text-small">browse more</a>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- latest-transaction-section end -->



  <!-- affiliate-features-section start -->

  <section class="affiliate-features-section pt-120 pb-120">

    <div class="shape"><img src="{{ url('new_front_asset/images/elements/affiliate-shape.png') }}" alt="image"></div>

    <div class="container">

      <div class="row">

        <div class="col-xl-6">

          <div class="affiliate-features-content text-xl-left text-center">

            <div class="section-header">

              <span class="section-subtitle">Earn The Big Money</span>

              <h2 class="section-title">Affiliate Program</h2>

              <p>Our affiliate program can increase your income by receiving percentage from the purchases made by your referrals into. </p>

            </div>

            <p>Invite other users (for example, your friends, co-workers, etc.) to join the project. After registration they will be your referrals; and if they purchase any item on our web site you receive 24% reward.</p>

            <a href="#0" class="btn btn-primary btn-hover text-small">read more</a>

          </div>

        </div>

        <div class="col-xl-6">

          <div class="row mb-none-30">

            <div class="col-xl-6 col-lg-4 col-md-6">

              <div class="affiliate-features-item text-center mb-30">

                <div class="icon"><img src="{{ url('new_front_asset/images/icons/affiliate-features/1.svg') }}" alt="image"></div>

                <span class="subtitle">Enjoy unlimited</span>

                <h3 class="title">Free</h3>

                <!-- <p>The more User you refer, the more commissions we’ll pay you. Plain and simple.</p> -->

              </div>

            </div><!-- affiliate-features-item end -->

            <div class="col-xl-6 col-lg-4 col-md-6">

              <div class="affiliate-features-item text-center mb-30">

                <div class="icon"><img src="{{ url('new_front_asset/images/icons/affiliate-features/2.svg') }}" alt="image"></div>

                <span class="subtitle">Extra Bonus and</span>

                <h3 class="title">1000</h3>

                <!-- <p>Boost your monthly earnings with additional promotional opportunities.</p> -->

              </div>

            </div><!-- affiliate-features-item end -->

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- affiliate-features-section end -->



  <!-- testimonial-section start -->

  <section class="testimonial-section pt-xl-120 pb-120">

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-10">

          <div class="section-header text-center">

            <span class="section-subtitle">Testimonials</span>

            <h2 class="section-title">Over 7,000 Happy Customers</h2>

            <p>We have many happy investors invest with us .Some impresions from our Customers!  PLease read some of the lovely things our Customers say about us.</p>

            <div class="btn-area">

              <a href="{{ url('/customer_register') }}" class="btn btn-primary text-small">join us</a>

              <a href="#0" class="btn btn-primary text-small">what we offer</a>

            </div>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-lg-12">

          <div class="testimonial-wrapper style--one d-lg-flex flex-wrap justify-content-between d-none">

            <div class="testimonial-single">

              <div class="thumb">

                <img src="{{ url('new_front_asset/images/testimonial/1.png') }}" alt="image">

              </div>

              <div class="details text-center">

                <p>Great service! I have been worried about investing. But when I came here. I don't have to worry anymore</p>

                <h4 class="name">Joy Kelley</h4>

                <span class="client-details">United kingdom, 28th April,2019</span>

                <span class="arrow-wrap"><span class="arrow"></span></span>

              </div>

            </div><!-- testimonial-single end -->

            <div class="testimonial-single">

              <div class="thumb">

                <img src="{{ url('new_front_asset/images/testimonial/2.png') }}" alt="image">

              </div>

              <div class="details text-center">

                <p>Great service! I have been worried about investing. But when I came here. I don't have to worry anymore</p>

                <h4 class="name">Joy Kelley</h4>

                <span class="client-details">United kingdom, 28th April,2019</span>

                <span class="arrow-wrap"><span class="arrow"></span></span>

              </div>

            </div><!-- testimonial-single end -->

            <div class="testimonial-single">

              <div class="thumb">

                <img src="{{ url('new_front_asset/images/testimonial/3.png') }}" alt="image">

              </div>

              <div class="details text-center">

                <p>Great service! I have been worried about investing. But when I came here. I don't have to worry anymore</p>

                <h4 class="name">Joy Kelley</h4>

                <span class="client-details">United kingdom, 28th April,2019</span>

                <span class="arrow-wrap"><span class="arrow"></span></span>

              </div>

            </div><!-- testimonial-single end -->

            <div class="testimonial-single active">

              <div class="thumb">

                <img src="{{ url('new_front_asset/images/testimonial/4.png') }}" alt="image">

              </div>

              <div class="details text-center">

                <p>Great service! I have been worried about investing. But when I came here. I don't have to worry anymore</p>

                <h4 class="name">Joy Kelley</h4>

                <span class="client-details">United kingdom, 28th April,2019</span>

                <span class="arrow-wrap"><span class="arrow"></span></span>

              </div>

            </div><!-- testimonial-single end -->

            <div class="testimonial-single">

              <div class="thumb">

                <img src="{{ url('new_front_asset/images/testimonial/5.png') }}" alt="image">

              </div>

              <div class="details text-center">

                <p>Great service! I have been worried about investing. But when I came here. I don't have to worry anymore</p>

                <h4 class="name">Joy Kelley</h4>

                <span class="client-details">United kingdom, 28th April,2019</span>

                <span class="arrow-wrap"><span class="arrow"></span></span>

              </div>

            </div><!-- testimonial-single end -->

            <div class="testimonial-single">

              <div class="thumb">

                <img src="{{ url('new_front_asset/images/testimonial/6.png') }}" alt="image">

              </div>

              <div class="details text-center">

                <p>Great service! I have been worried about investing. But when I came here. I don't have to worry anymore</p>

                <h4 class="name">Joy Kelley</h4>

                <span class="client-details">United kingdom, 28th April,2019</span>

                <span class="arrow-wrap"><span class="arrow"></span></span>

              </div>

            </div><!-- testimonial-single end -->

          </div>

          <div class="testmonial-slider-wrapper d-lg-none mb-4">

            <div class="testimonial-slider owl-carousel">

              <div class="testimonial-single-two">

                <div class="thumb"><img src="{{ url('new_front_asset/images/testimonial/2.png') }}" alt="image"></div>

                <h4 class="name">Kevin Ohashi</h4>

                <span class="designation">Award winning blogger</span>

                <p>behoof has one of the friendliest affiliate programs.They’re definitely one of the bestinvestment website in the world. I’ve been using them for a long time and have never had any problems</p>

              </div><!-- testimonial-single-two end -->

              <div class="testimonial-single-two">

                <div class="thumb"><img src="{{ url('new_front_asset/images/testimonial/3.png') }}" alt="image"></div>

                <h4 class="name">Kevin Ohashi</h4>

                <span class="designation">Award winning blogger</span>

                <p>behoof has one of the friendliest affiliate programs.They’re definitely one of the bestinvestment website in the world. I’ve been using them for a long time and have never had any problems</p>

              </div><!-- testimonial-single-two end -->

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- testimonial-section end -->



  <!-- investors-section start -->

  <section class="investors-section pt-120 ">

    <div class="bg-shape bg_img" data-background="{{ url('new_front_asset/images/investor-bg.png') }}"></div>

    <div class="container">

      <div class="row">

        <div class="col-lg-6 col-md-8">

          <div class="section-header text-white wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">

            <span class="section-subtitle">Take a look at our</span>

            <h2 class="section-title">Top 10 Investors</h2>

            <p>A look at the top ten investors of all time and the strategies they used to make their money.</p>

          </div>

        </div>

      </div>

      <div class="investor-slider owl-carousel">

  

   
@foreach ($INVESTORS as $key)
        <div class="investor-item text-center">

          <div class="thumb">

          
              @if($key->profile_pic)<img src="{{ url('uploads/Profile',$key->profile_pic) }}" alt="image">@else <img src="{{ url('uploads/Profile/images.png') }}" alt="image"> @endif

            <!-- <a href="#0" class="icon"><i class="fa fa-linkedin"></i></a> -->

          </div>

          <div class="content">

            <h4 class="name"><a href="#0">{{$key->name}}</a></h4>

            <span class="amount">${{$key->sum}}</span>

            <p>Pain by <img src="{{ url('new_front_asset/images/icons/withdraw/bitcoin.png') }}" alt="icon"></p>

          </div>

        </div>
@endforeach
   

      </div>

    </div>

  </section>

 

<!--   <section class="contest-winner-section pt-120 pb-120">

    <div class="shape"><img src="{{ url('new_front_asset/images/elements/contest-shape.png') }}" alt="image"></div>

    <div class="container">

      <div class="row justify-content-between">

        <div class="col-xl-6 col-lg-6">

          <div class="contest-winner-content">

            <div class="section-header text-lg-left text-center">

              <span class="section-subtitle">Take a look at our latest</span>

              <h2 class="section-title">Contest Winners</h2>

              <p>The contest is based on sales from your referrals.The person with the most total  referral's revenue will get the Grand Prize. The more revenue your referrals produce the bigger chance for you to be on top.</p>

              <a href="#0" class="btn btn-primary">read more</a>

            </div>

          </div>

        </div>

        <div class="col-xl-4 col-lg-6">

          <div class="contest-winner-slider owl-carousel">

            <div class="contest-winner-item">

              <div class="thumb">

                <img src="{{ url('new_front_asset/images/contest-winner/1.png') }}" alt="image">

                <span class="icon"><img src="{{ url('new_front_asset/images/icons/contest-winner/trophy.svg') }}" alt="icon"></span>

                <span class="amount">$1,000.00</span>

                <span class="date">feb 2019</span>

              </div>

            </div>

            <div class="contest-winner-item">

              <div class="thumb">

                <img src="{{ url('new_front_asset/images/contest-winner/1.png') }}" alt="image">

                <span class="icon"><img src="{{ url('new_front_asset/images/icons/contest-winner/trophy.svg') }}" alt="icon"></span>

                <span class="amount">$1,000.00</span>

                <span class="date">feb 2019</span>

              </div>

            </div>

            <div class="contest-winner-item">

              <div class="thumb">

                <img src="{{ url('new_front_asset/images/contest-winner/1.png') }}" alt="image">

                <span class="icon"><img src="{{ url('new_front_asset/images/icons/contest-winner/trophy.svg') }}" alt="icon"></span>

                <span class="amount">$1,000.00</span>

                <span class="date">feb 2019</span>

              </div>

            </div>

            <div class="contest-winner-item">

              <div class="thumb">

                <img src="{{ url('new_front_asset/images/contest-winner/1.png') }}" alt="image">

                <span class="icon"><img src="{{ url('new_front_asset/images/icons/contest-winner/trophy.svg') }}" alt="icon"></span>

                <span class="amount">$1,000.00</span>

                <span class="date">feb 2019</span>

              </div>

            </div>

            <div class="contest-winner-item">

              <div class="thumb">

                <img src="{{ url('new_front_asset/images/contest-winner/1.png') }}" alt="image">

                <span class="icon"><img src="{{ url('new_front_asset/images/icons/contest-winner/trophy.svg') }}" alt="icon"></span>

                <span class="amount">$1,000.00</span>

                <span class="date">feb 2019</span>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section> -->

  <!-- contest-winner-section end  -->



  <!-- partner-section start -->

<!--   <section class="partner-section pt-lg-120 pb-120">

    <div class="container">

      <div class="row justify-content-between">

        <div class="col-lg-5">

          <div class="partner-wrapper">

            <div class="partner-single wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.5s">

              <div class="partner-single-inner">

                <img src="{{ url('new_front_asset/images/partners/1.png') }}" alt="image">

              </div>

            </div>

            <div class="partner-single wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

              <div class="partner-single-inner">

                <img src="{{ url('new_front_asset/images/partners/2.png') }}" alt="image">

              </div>

            </div>

            <div class="partner-single wow zoomIn" data-wow-duration="0.7s" data-wow-delay="0.5s">

              <div class="partner-single-inner">

                <img src="{{ url('new_front_asset/images/partners/3.png') }}" alt="image">

              </div>

            </div>

            <div class="partner-single wow zoomIn" data-wow-duration="0.9s" data-wow-delay="0.5s">

              <div class="partner-single-inner">

                <img src="{{ url('new_front_asset/images/partners/4.png') }}" alt="image">

              </div>

            </div>

            <div class="partner-single wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.5s">

              <div class="partner-single-inner">

                <img src="{{ url('new_front_asset/images/partners/5.png') }}" alt="image">

              </div>

            </div>

          </div>

        </div>

        <div class="col-lg-6">

          <div class="section-header text-lg-left text-center">

            <span class="section-subtitle">Let’s see our</span>

            <h2 class="section-title">Trusted Partners</h2>

            <p>We’re committed to making our clients successful by becoming their partners and trusted advisors .behoof believes in being your trusted partner and earning that trust through confidence and performance in service and support.</p>

            <a href="#0" class="btn btn-primary text-small">join with us</a>

          </div>



        </div>

      </div>

    </div>

  </section> -->

  <!-- partner-section end -->



 <section class="choose-us-section pt-120 pb-120 bg_img" data-background="{{ url('new_front_asset/images/elements/choose-us-bg-shape.png') }}">

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-8">

          <div class="section-header text-center">

            <span class="section-subtitle">Our Payments</span><br>

            <img src="{{ url('new_front_asset/images/payments/icon1.png') }}">

            <img src="{{ url('new_front_asset/images/payments/icon2.png') }}">

            <img src="{{ url('new_front_asset/images/payments/icon3.png') }}">

            <img src="{{ url('new_front_asset/images/payments/icon4.png') }}">

            <img src="{{ url('new_front_asset/images/payments/icon5.png') }}">

            <img src="{{ url('new_front_asset/images/payments/icon6.png') }}">

            <img src="{{ url('new_front_asset/images/payments/icon7.png') }}">

            <img src="{{ url('new_front_asset/images/payments/icon8.png') }}">

            <img src="{{ url('new_front_asset/images/payments/icon9.png') }}">

          </div>

        </div>

      </div>

    </div>

<!--     <div class="container-fluid p-0">

      <div class="row m-0">

        <div class="col-lg-12 p-0">

          <div class="choose-us-slider owl-carousel">

              <div class="choose-item text-center">

                <div class="choose-thumb">

                  <img src="{{ url('new_front_asset/images/choose-us/1.png') }}" alt="image">

                </div>

                <div class="choose-content">

                  <h3 class="title">Fast Profit </h3>

                  <p>We're talking about ways you can make money fast.Invest money and get reward, bonus and profit</p>

                  <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a>

                </div>

              </div>

              <div class="choose-item text-center">

                <div class="choose-thumb">

                  <img src="{{ url('new_front_asset/images/choose-us/2.png') }}" alt="image">

                </div>

                <div class="choose-content">

                  <h3 class="title">Instant Withdraw</h3>

                  <p>We’re extremely excited to launch instant withdrawals.you can deposit and withdraw funds in just a few clicks.</p>

                  <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a>

                </div>

              </div>

              <div class="choose-item text-center">

                <div class="choose-thumb">

                  <img src="{{ url('new_front_asset/images/choose-us/3.png') }}" alt="image">

                </div>

                <div class="choose-content">

                  <h3 class="title">Dedicated Server</h3>

                  <p>Dedicated server hosting with 100% guaranteed network uptime.There's no sharing of CPU time, RAM or bandwidth</p>

                  <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a>

                </div>

              </div>

              <div class="choose-item text-center">

                <div class="choose-thumb">

                  <img src="{{ url('new_front_asset/images/choose-us/4.png') }}" alt="image">

                </div>

                <div class="choose-content">

                  <h3 class="title">DDoS Protection</h3>

                  <p>To protect your resources from modern DDoS attacks is through a multi-layer deployment of purpose-built DDoS mitigation </p>

                  <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a>

                </div>

              </div>

              <div class="choose-item text-center">

                <div class="choose-thumb">

                  <img src="{{ url('new_front_asset/images/choose-us/5.png') }}" alt="image">

                </div>

                <div class="choose-content">

                  <h3 class="title">24/7 Support</h3>

                  <p>Our Technical Support team is available for any questions.Our  multilingual 24/7 support allows to keep in touch.</p>

                  <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a>

                </div>

              </div>

              <div class="choose-item text-center">

                <div class="choose-thumb">

                  <img src="{{ url('new_front_asset/images/choose-us/1.png') }}" alt="image">

                </div>

                <div class="choose-content">

                  <h3 class="title">Fast Profit </h3>

                  <p>We're talking about ways you can make money fast.Invest money and get reward, bonus and profit</p>

                  <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a>

                </div>

              </div>

          </div>

        </div>

      </div>

    </div> -->

  </section>



@endsection

@section('js')
<script type="text/javascript">

  $( function() {
    // var earning_type=document.getElementById('#earning_type').value 
    // var earning_type=$( "#myselect" ).val();
    
    // console.log(earning_type);


    $( "#slider-range-min-one" ).slider({

      range: "min",

      value: 0,

      min: 

      {{$min}},
 max: 

      {{$max}},
   

      slide: function( event, ui ) {

        $( "#basic-amount" ).val( "$" + ui.value );
        // console.log(ui.value);
        get_commisan();

}
    });

    $( "#basic-amount" ).val( "$" + $( "#slider-range-min-one" ).slider( "value" ) );

  });

  $("#earning_type").on('change',function(){
    get_commisan();
  });

  function get_commisan() {
    var amount = $('#basic-amount').val();
    amount=amount.substr(1);
    // console.log(amount);
    var earning_type = $('#earning_type').val();
   $.ajax({
                url: 'get_recod',
                type: 'get',
                data: { amount: amount, earning_type:earning_type},
                dataType: "json",
                success: function(response)
                {
                  // console.log(response); 

                  $( "#dailyProfit" ).text( '$'+response.daily.toFixed(2) );
                  $( "#monthlyProfit" ).text('$'+response.month.toFixed(2));

                }
                



      });
  }
</script>
@endsection