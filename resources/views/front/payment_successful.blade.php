@extends('layouts.front') @section('content')
  <section id="contact" class="contact white-bg">

    <div class="container">
	<div class="row">
		<h2>Payment Successful</h2>	
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
								<td>{{Cart::getTotal()}}</td>	
								<td>00</td>
							</tr>
							
							
							
							
							<tr>
								
								<td><!-- Office Manager signature --></td>
								<td colspan="2"><!-- Cashier Signature --> <br><br></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> 
		</div>
	</div>	</section>

 