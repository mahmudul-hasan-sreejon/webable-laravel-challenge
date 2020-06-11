@extends('layouts.app')

@section('content')

    <a href="/films">Back to Films</a>

    <h1 class="my-4">{{ $film->name }}</h1>

    <div class="row">
        <div class="col-md-8">
            <img class="img-fluid" src="{{ asset( "storage/".$film->photo ) }}" alt="">
        </div>

        <div class="col-md-4">
            <h3 class="my-3">Film Description</h3>
            <p>{{ $film->description }}</p>

            <h3 class="my-3">Details</h3>
            <ul>
                <li>Release Date: {{ $film->release_date }}</li>
                <li>Rating: {{ $film->rating }}</li>
                <li>Ticket Price: {{ $film->ticket_price }}</li>
                <li>Country: {{ $film->countries->name }}</li>
                <li>Genres: {{ $film->genreList() }}</li>
            </ul>
        </div>
    </div>

@endsection
