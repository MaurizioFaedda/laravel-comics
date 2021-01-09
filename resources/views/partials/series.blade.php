<div class="section-series">
    <div class="container">
        <div class="uppercase">
            <h2>current series</h2>
        </div>
        <div class="cards">
            @foreach ($series as $index => $serie)

                    <div class="card">
                        <a href="{{ route('comic-details', ['id' => $index]) }}">
                            <div class="serie-img">
                                <img src="{{$serie['thumb']}}" alt="">
                            </div>
                            </a>
                        <a href="{{ route('comic-details', ['id' => $index]) }}">
                        <h3>{{ $serie['series']}}</h3>
                    </a>

                    </div>

            @endforeach
        </div>
        <div class="more-button">
            <h3> <a class="uppercase" href="#">
                load more
            </a> </h3>
        </div>
    </div>
</div>
