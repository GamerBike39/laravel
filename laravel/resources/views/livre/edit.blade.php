@extends('layouts.app')


@section('content')

    <div class="container mt-5">

        <h1>Modifier</h1>


        @if ($errors->any())
            <div class="alert alert-danger">

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <form method="post" action="{{ url('livre/' . $livre->id) }}">
            @method('PATCH')
            @csrf


            <div class="form-group mb-3">
                <label for="author">Auteur :</label>
                <input type="text" class="form-control" id="author" placeholder="Entrez le nom de l'auteur" name="author"
                    value="{{ $livre->author }}">
            </div>

            <div class="form-group mb-3">
                <label for="title">Titre:</label>
                <input type="text" class="form-control" id="title" placeholder="Titre du livre" name="title"
                    value="{{ $livre->title }}">
            </div>
            <div class="form-group mb-3">
                <label for="desc">Description :</label>
                <input type="text" class="form-control" id="desc" placeholder="Description du livre" name="desc"
                    value="{{ $livre->desc }}">
            </div>
            <div class="form-group mb-3">
                <label for="price">prix :</label>
                <input type="number" class="form-control" id="price" placeholder="prix du livre" name="price"
                    value="{{ $livre->price }}">
            </div>



            <button type="submit" class="btn btn-primary">Enregistrer</button>

        </form>

        <a href="{{ route('livre.index') }}">Retour à la liste des livres</a>
    </div>

@endsection
