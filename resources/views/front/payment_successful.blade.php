@extends('layouts.front')
@section('Breadcrumbs')
<section class="breadcrumbs">

      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Checkout Successful </h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
             <li>Checkout Successful</li>  

          </ol>
        </div>
      </div>

    </section><!-- End Breadcrumbs -->
@endsection @section('content')
  <section id="contact" class="contact white-bg">

    <div class="container">
	<div class="row">
		<h2>checkout Successful</h2>	
			<div class="table-responsive">
                <div class="table-responsive custom_datatable">	
               


                </label>					
					<table class="table table-bordered" style="width:100%;margin:auto;text-align:left;">
                        <tbody>										
							

							
							<tr>
                                <td rowspan="2" colspan="2"><h3 style="margin:8px 0 0 63px;">
                                	<label>Name:{{Auth::user()->name}}</label>
                                </h3></td>
                                <td>Challan NO</td>
								<td colspan="2">00{{$data->id}} </td>
                            </tr>									
                            <tr>
                                <td>Date</td>  
								<td colspan="2">{{$data->created_at}}</td>  											
                            </tr>
                           
							<tr>
								<td rowspan="6">Santhosh Poojary Keyyur</td>
								<td rowspan="6" width="50%">{{$data->address}}
									<br>{{$data->State}}
									<br>{{$data->City}}
								</td>
								<td>Total</td>
								<td>{{ Cart::session(Auth::user()->id)->getSubTotal() }}</td>	
								<td>00</td>
							</tr>
							<tr>
								
								<td><!-- Office Manager signature --></td>
								<td colspan="2"><!-- Cashier Signature --> <br><br></td>
							</tr>

						</tbody>
						<tr>
							<td colspan="6"><b>product </b></td>
						</tr>
							 @foreach($cart as $valu)
						     <tr >
					
                                <td colspan="3">{{$valu['name']}}</td>  
								<td colspan="1">{{$valu['price']}}</td> 
								<td colspan="2">{{$valu['quantity']}}</td> 											
                            </tr>
                            @endforeach

					</table>
				</div>

			</div> 
		</div>
		
		<a href="{{url('remove_cart')}}" class="btn btn-dark flortright margin10">Back To Home</a>
	</div>	</section>

@endsection