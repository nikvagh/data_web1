 @if(count($data)=='0')
  <div class="update-cart-wrapper">

                <p><i class="icofont-check-circled mr-2"></i> Cart Is empty</p>


              </div>

            @else
            <div class="cart-table-area">
            <table class="cart-table">

                  <thead>

                    <tr>

                      <th>SL No.</th>

                      <th >Product</th>
                       <th >Quality</th>
                         
                    <th >Price</th>
                    <th >Subtotal</th>
                    <th >Remove</th>

                    </tr>

                  </thead>

                  <tbody>


  <label style="display: none;">{{$no=1}}</label>

                        @foreach($data as $valu)
                    <tr>
                        <td>{{$no++}}</td>
                      <td>

                        <div class="product">

                          <!-- <div class="icon"><img src="{{ url('new_front_asset/images/icons/investment/3.png') }}" alt="image"></div> -->

                          <span class="name">{{$valu['name']}}</span>

                        </div>

                      </td>


                      <td class="d-flex">


                        <button id="plus_{{$valu['id']}}" class="btn btn-dark pluscart"><i class="icofont-plus"></i></button>
                        <div class="quantity rapper-quantity">


                          <input type="number" min="0" max="100"  class="padding10" value="{{$valu['quantity']}}" readonly>
                        </div>
                        <button id="minus_{{$valu['id']}}" class="btn btn-dark minuscart"><i class="icofont-minus"></i></button>


                      </td>
                      <td>{{$valu['price']}}</td>

                      <td>{{$valu['quantity']*$valu['price']}}</td>

                      <td>

                       

                       <button id="Delete_{{$valu['id']}}" class="btn btn-primary deletecart"><i class="icofont-bin"></i></span></button>

                      </td>
 @endforeach
                    </tr>

                  </tbody>

                </table>
</div>

              <div class="cart-total">

                <span class="caption">Total to Pay:</span>

                <span class="total-amount">{{ Cart::session(Auth::user()->id)->getSubTotal() }}</span>

              </div>

           <div class="mt-5 text-center">

                <!-- <button type="submit" class="">PurChase</button> -->
    <a href="{{url('checkout')}}" class="btn btn-primary btn-hover btn-round">Checkout</a>

              </div>

              @endif



