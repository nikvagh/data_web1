
 <table id="tblid"  class="table">
                    <thead>
                        <tr>
                            <th scope="col">SL No.</th>
                            <th scope="col">Product</th>
                            <th scope="col">Quality</th>
                         

                            <th scope="col">Price</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <label style="display: none;">{{$no=1}}</label>

                  

                        
                        @foreach($data as $valu)
                   <tr scope="row">
                            <td>{{$no++}}</td>

                            <td>{{$valu['name']}}</td>
                            <td>
                            	<button id="plus_{{$valu['id']}}" class="btn btn-dark pluscart"><i class="icofont-plus"></i></button>
                               
                            	<label class="padding10">{{$valu['quantity']}}</label>
                            	<button id="minus_{{$valu['id']}}" class="btn btn-dark minuscart"><i class="icofont-minus"></i></button>
                            </td>
                            <td>{{$valu['price']}}</td>
                             <td>{{$valu['quantity']*$valu['price']}}</td>
                            <td><button id="Delete_{{$valu['id']}}" class="btn btn-primary deletecart"><i class="icofont-bin"></i></span></button></td>
                                @endforeach
                            

                                <!--quantity-->

                                    <!-- //checkout -->
                                   
                                </div>
                            </td>
                        </tr>
                  
                </table>
                <div class="flortright">
                    <table>
                        <tr>
                            <th class="flortright">SubTotal : </th>
                            <td>{{ Cart::session(Auth::user()->id)->getSubTotal() }}</td>
                        </tr>
                      
                         <tr>
                            <th class="flortright">Delivery Charges  : </th>
                            <td>{{ $dc=10}}</td>
                        </tr>

                        <tr>
                            <th class="flortright">Total : </th>
                            <td><b>{{ Cart::session(Auth::user()->id)->getSubTotal() + $dc}}</b></td>
                        </tr>
                        
                    </table>
                  

                </div>