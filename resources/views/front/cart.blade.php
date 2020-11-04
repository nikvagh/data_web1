@extends('layouts.new_pro')

 @section('content')


  <!-- inner-page-banner-section start -->

  <section class="inner-page-banner-section gradient-bg">

    <div class="illustration-img"><img src="{{ url('new_front_asset/images/inner-page-banner-illustrations/investment.png') }}" alt="image-illustration"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="inner-page-content-area">

                    <h2 class="page-title">Checkout</h2>

                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="home-one.html">Home</a></li>

                            <li class="breadcrumb-item"><a href="#0">Pages</a></li>

                            <li class="breadcrumb-item">Cart Pages</li>

                        </ol>

                    </nav>

                </div>

            </div>

        </div>

    </div>

  </section>

  <!-- inner-page-banner-section end -->



  <!-- checkout-section start -->

  <section class="checkout-section pb-120">

    <div class="container">

      <div class="row">

        <div class="col-lg-12">

          <div class="main-area">

            <div class="checkout-wrapper">

              <div class="checkout-message">

                <p>Hey! Nice selection of items there.Please review your order below

                  and follow the next quick steps to complete your order.</p>

              </div>

             
       <div id="cart_box"></div>



   

            </div><!-- checkout-wrapper end -->

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- checkout-section end  -->



<!-- ===================================================================================================================================================== -->


 @endsection

 @section('js')
 <script type="text/javascript">
  $(document).ready(function(){
            load_cart_block();
        });
        function load_cart_block(){

            $.ajax({
                type:'GET',
                url:"{{URL::route('load_cart_block')}}",
                dataType: "json",
                success:function(data) {

                    // console.log(data);
                    $("#cart_box").html(data.view_data);
                }
            });
           
        }
     
       
	  $(document).on("click", ".pluscart", function(){
		 var plus =$(this).attr('id');
		 // console.log(plus);
		const chars = plus.split('');
		// console.log(chars[5]);
		var id= chars[5];
	  	$.ajax({
            url:"pluscart/"+id,  
            url:"{{URL('pluscart/')}}"+"/"+id, 
            type: "get",   
            dataType: 'json',
           success:function(result){
           	// alert('helo');
           console.log(result.abc);
           load_cart_block();
            }
        });
		});


	  $(document).on("click", ".minuscart", function(){
	  	 var minus =$(this).attr('id');
		 // console.log(minus);
		const chars = minus.split('');
		// console.log(chars[6]);
		var id= chars[6];
	  	$.ajax({
            url:"{{URL('minuscart/')}}"+"/"+id,  
            type: "get",   
            dataType: 'json',
           success:function(result){
           console.log(result.abc);
           load_cart_block();
            }
        });
      
		});

	   $(document).on("click", ".deletecart", function(){
	  	 var minus =$(this).attr('id');
		 // console.log(minus);
		const chars = minus.split('');
		// console.log(chars[7]);
		var id= chars[7];
	  	$.ajax({
            url:"{{URL('clear_cart/')}}"+"/"+id, 
            type: "get",   
            dataType: 'json',
           success:function(result){
           console.log(result.abc);
           load_cart_block();
            }
        });
		});
</script>

@endsection
