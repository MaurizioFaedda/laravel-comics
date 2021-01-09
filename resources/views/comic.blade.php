@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section id="single-comic">
        <div class="thumb-img container-sx">
            <div class="img-comics-box">
                <div class="img-comics-content">
                    <div class="comic-small label">
                        <small class="uppercase">comic book</small>
                    </div>
                    <img src="{{ $comic['thumb']}}" alt="">
                    <div class="view-gallery label">
                        <small class="uppercase">view gallery</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="details-comic">
            <div class="container-sx">
                <div class="shop-comic">
                    <div class="info-shop">
                        <h1 class="uppercase">{{ $comic['series']}}</h1>
                        <div class="price-check">
                            <div class="price-comic">
                                <h4>U.S. Price: $19.99</h4>
                            </div>
                            <div class="check-comic">
                                <h4 class="uppercase">available</h4>
                                <h4>Buy Now ▾</h4>
                            </div>
                        </div>

                    </div>
                    <div class="adv">
                        <h4 class="uppercase">advertisement</h4>
                        <img src="{{asset('images/adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
