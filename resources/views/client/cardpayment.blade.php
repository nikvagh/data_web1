@extends('layouts.customer_dash') @section('content')
<style type="text/css">
    .image-upload > input {
        display: none;
    }
</style>
<section class="content">
    <div class="row">
        <form method="post" action="{{url('card')}}">
            @csrf
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Card</h3>
                    </div>
                    <input type="hidden" name="agent_id" value="{{$get[0]->agent_id }}" />
                    <div class="container-fluid">
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="Number" name="amount" class="form-control" placeholder="Amount" />
                            @error('amount')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Card Number</label>
                            <input type="Number" name="card_number" class="form-control" placeholder="0000-0000-0000" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" />
                            @error('card_number')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>expiry month/year</label>
                            <div style="display: flex;">
                                <input type="Number" name="expiry_month" style="width: 50%;" placeholder="12" class="form-control" max="12" min="1" pattern="[0-9]{2}" />
                                <input type="Number" name="expiry_year" style="width: 50%;" placeholder="2050" class="form-control" maxlength="4" pattern="[0-9]{4}" />
                            </div>
                            @error('expiry_month')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror @error('expiry_year')
                            <small class="form-text text-muted" style="color: red; float: right;"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>CVV</label>
                            <input type="Number" name="cvv" style="width: 50%;" class="form-control" placeholder="CVV" pattern="[0-9]{3}" />
                            @error('cvv')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Card Name</label>
                            <input type="text" name="card_name" class="form-control" placeholder="Card Name" />
                            @error('card_name')
                            <small class="form-text text-muted" style="color: red;"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-success" value="pay" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
