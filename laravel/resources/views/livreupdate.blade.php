<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Modification du livre : {{ $livre->title }}</h1>

    <form action="/livreupdate" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $livre->id }}">
        <label for="title">Titre :</label>
        <input type="text" name="title" value="{{ $livre->title }}">
        <label for="author">Auteur :</label>
        <input type="text" name="author" value="{{ $livre->author }}">
        <label for="desc">Résumé :</label>
        <input type="text" name="desc" value="{{ $livre->desc }}">
        <label for="price">Prix :</label>
        <input type="text" name="price" value="{{ $livre->price }}">
        <button type="submit">Mettre à jour</button>
    </form>

    <a href="/">Retour à la liste des livres</a>


</body>

</html>
