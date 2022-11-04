@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1>{{ $livre->title }}</h1>
        <p><b>Auteur :</b> {{ $livre->author }}</p>
        <p><b>Résumé :</b> {{ $livre->desc }}</p>
        <p><b>Prix : </b>{{ $livre->price }} €</p>
        <p><b>Couverture : </b><img src="{{ $livre->image }}" alt="cover"></p>
        <a href="{{ route('livre.index') }}">Retour à la liste des livres</a>
        <form action="{{ url('livre/' . $livre->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <a class="btn btn-primary" href="{{ url('livre/' . $livre->id . '/edit') }}">Modifier</a>
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
@endsection
