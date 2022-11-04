@extends('layouts.app')


@section('content')
    <div class="container mt-5">
        <h1>Liste des livres :</h1>

        <ul>
            @foreach ($livres as $livre)
                <li><a href="{{ route('livre.show', $livre->id) }}">{{ $livre->title }}</a></li>
                {{-- <li><a href="{{ route('livre.show', [$livre->id, $livre->slug]) }}">{{ $livre->title }}</a></li> --}}
            @endforeach
        </ul>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('livre/create') }}">Ajouter</a>
        </div>
    </div>
@endsection
