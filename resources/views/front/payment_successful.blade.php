@extends('layouts.front')
@section('Breadcrumbs')
<section class="breadcrumbs">

      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Order Successful </h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
             <li>Order Successful</li>  

          </ol>
        </div>
      </div>

    </section><!-- End Breadcrumbs -->
@endsection @section('content')
  <section id="contact" class="contact white-bg">

    <div class="container">
	<div class="row">
		<h2>Order Successful</h2>	
			<div class="table-responsive">
                <div class="table-responsive custom_datatable">	
               


                </label>					
					<table class="table table-bordered" style="width:100%;margin:auto;text-align:left;">
                        <tbody>
							<tr>
								<td colspan="2">
									<h3 style="">
										<label>Name:{{Auth::user()->name}}</label>
									</h3>
								</td>
								<td>Order NO</td>
								<td >#{{$data->id}} </td>
							</tr>									
							<tr>
								<td colspan="2"></td>
								<td>Date</td>
								<td>{{$data->created_at}}</td>  											
							</tr>
							<tr>
								<td colspan="2"><b>Product </b></td>
								<td><b>Amount </b></td>
								<td><b>Qty </b></td>
							</tr>
							@foreach($products as $valu)
								<tr>
									<td colspan="2">{{$valu->name}}</td>  
									<td>{{$valu->amount}}</td> 
									<td>{{$valu->quality}}</td> 											
								</tr>
							@endforeach
							<tr>
								<td>
									{{$data->address}}
									<br>{{$data->State}}
									<br>{{$data->City}}
								</td>
								<td>Total</td>
								<td>{{ $products->sum('amount') }}</td>
								<td></td>
							</tr>
						</tbody>

					</table>
				</div>

			</div> 
		</div>
		
		<a href="{{url('remove_cart')}}" class="btn btn-dark flortright margin10">Back To Home</a>
	</div>	</section>

@endsection