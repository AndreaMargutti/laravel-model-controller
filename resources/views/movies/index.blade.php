@extends('layouts.app')

@section('main-content')

    <h1>Ciao sono la pagina dei Movies</h1>

    <div class="container">
        <div class="row">
            @forelse ($movie as $movie )

                <div class="col-6">
                    <!--Inserisco la Card-->

                </div>

            @empty
                <div class="col-12">
                    <p>Movies Not Found...</p>
                </div>
            @endforelse
        </div>
    </div>

@endsection
