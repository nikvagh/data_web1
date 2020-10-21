@extends('layouts.new')
 @section('Breadcrumbs')
<section class="breadcrumbs">

      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Cart </h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
             <li>Cart</li>  

          </ol>
        </div>
      </div>

    </section><!-- End Breadcrumbs -->
@endsection
 @section('content')

<section id="pricing" class="cart section-bg">
<div class="checkout">
    <div class="container">
        <h2>Cart </h2>
  
            
         
       <div id="cart_box"></div>
    </div>
</div>
</div>
</div>
</section>

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
