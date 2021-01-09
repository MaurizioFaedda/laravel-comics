@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section id="single-comic">
        <div class="thumb-img">
            <div class="container-sx">
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
                                <h4>
                                    <a href="#">Buy Now ▾</a>

                                </h4>
                            </div>
                        </div>
                        <div class="info-comic">
                            <p>{{$comic['description']}}</p>
                        </div>

                    </div>
                    <div class="adv">
                        <h4 class="uppercase">advertisement</h4>
                        <img src="{{asset('images/adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="talent-specs">
            <div class="container-sx">
                <div class="talent-specs-content">
                    <div class="talent">
                        <h2>Talent</h2>
                        <div class="talent-info">
                            <div class="info-content">
                                <h5>Art by:</h5>
                                <p>
                                    @foreach ($comic['artists'] as $artist)
                                        <a href="#">{{ $artist }}</a>
                                        {{ !$loop->last ? ',' : '' }}
                                    @endforeach
                                </p>
                            </div>
                            <div class="info-content">
                                <h5>Written by:</h5>
                                <p>
                                    @foreach ($comic['writers'] as $writer)
                                        <a href="#">{{ $writer }}</a>
                                        {{ !$loop->last ? ',' : '' }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="specs">
                        <h2>Specs</h2>
                        <div class="specs-info">
                            <div class="info-content">
                                <h5>Series:</h5>
                                <p>
                                    <a href="#">{{ $comic['series'] }}</a>
                                </p>
                            </div>
                            <div class="info-content">
                                <h5>U.S. Price:</h5>
                                <p>{{ $comic['price']}}</p>
                            </div>
                            <div class="info-content">
                                <h5>On Sale Date:</h5>
                                <p>
                                    {{ DateTime::createFromFormat('Y-m-d', $comic['sale_date'])->format('M d Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icons-boxes">
            <div class="container-sx">
                <div class="icons-content uppercase">
                    <div class="single-icon">
                        <a href="#">
                            <span class="icon-text">digital comics</span>
                            <div class="icon-img"></div>
                        </a>
                    </div>
                    <div class="single-icon">
                        <a href="#">
                            <span class="icon-text">shop dc</span>
                            <div class="icon-img"></div>
                        </a>
                    </div>
                    <div class="single-icon">
                        <a href="#">
                            <span class="icon-text">comic shop locator</span>
                            <div class="icon-img"></div>
                        </a>
                    </div>
                    <div class="single-icon">
                        <a href="#">
                            <span class="icon-text">subscription</span>
                            <div class="icon-img"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
