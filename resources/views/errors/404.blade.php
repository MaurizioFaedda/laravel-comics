@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <div class="container">
        <h1>
            La pagina non è stata trovata.
        </h1>
        <h3>
            Torna alla <a href="{{ route('homepage')}}"> Homepage</a>
        </h3>
    </div>
    @include('partials.section_action')
@endsection
