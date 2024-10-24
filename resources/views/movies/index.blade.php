@extends('layouts.app')

@section('main-content')

    <h1>Ciao sono la pagina dei Movies</h1>

    <div class="container-fluid">
        <div class="row">
            @forelse ($movie as $movie )

                <div class="col-4 mb-4">
                    <!--Inserisco la Card-->
                    <div class="card w-100">
                        <div class="card-body">
                          <h5 class="card-title"> {{$movie->title}} </h5>
                          <p class="card-text"> {{$movie->id}} </p>
                        </div>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Titolo Originale:</strong> {{$movie->original_title}} </li>
                        <li class="list-group-item"><strong>Nazionalità:</strong> {{$movie->nationality}} </li>
                        <li class="list-group-item"><strong>Data d'Uscita:</strong> {{$movie->date}} </li>
                        <li class="list-group-item"><strong>Voto:</strong> {{$movie->vote}} </li>
                        </ul>
                    </div>
                </div>

            @empty
                <div class="col-12">
                    <p>Movies Not Found...</p>
                </div>
            @endforelse
        </div>
    </div>

@endsection
