@extends('layouts.new')

@section('content')
<main id="main">

    <!-- ======= Portfolio Details Section ======= -->
<form method="post" action="{{url('addcart',$data->id)}}">@csrf
  <input type="hidden" name="path" value="{{Request::url()}}">
  <input type="hidden" name="id" value="{{$data->id}}">
    <section class="portfolio-details">
        <div class="container">
          @if (Session::has('message_s'))
        @include('partials.alert', ['type' => "success",'message'=> Session::get('message_s') ])
        @endif
            <div class="portfolio-details-container">
                <div class="owl-carousel portfolio-details-carousel">
                    <img src="{{ asset('/back_asset/assets/img/slide/banner2.jpg') }}" class="img-fluid" alt="" />

                    <img src="{{ asset('/back_asset/assets/img/slide/banner2.jpg') }}" class="img-fluid" alt="" />

                    <img src="{{ asset('/back_asset/assets/img/slide/banner2.jpg') }}" class="img-fluid" alt="" />
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h1>AUTO UNIT Portfolio Detail</h1>

                    <br />

                    <br />

                    <p>
                        Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium
                        nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                    </p>

                    <h3>PRICE:-${{$data->amount}}</h3>

                    <h3>PRODUCT DETAIL:-{{$data->name}}</h3>

                   <button type="submit" name="submit" class="btn btn-danger" value="Buy Now">Buy Now</button>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('/back_asset/assets/img/slide/content.png') }}" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>
    </form>
</main>


@endsection