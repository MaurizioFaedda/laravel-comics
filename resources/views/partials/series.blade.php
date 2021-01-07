<div class="section-series">
    <div class="container">
        <div class="uppercase">
            <h2>current series</h2>
        </div>
        <div class="cards">
            @foreach ($series as $serie)
                <div class="card">
                    <div class="serie-img">
                        <img src="{{$serie['thumb']}}" alt="">
                    </div>
                    <h3>{{ $serie['series']}}</h3>

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
