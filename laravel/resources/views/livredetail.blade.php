<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livre</title>
</head>

<body>

    <h1>{{ $livre->title }}</h1>

    <p><b>Auteur :</b> {{ $livre->author }}</p>
    <p><b>Résumé :</b> {{ $livre->desc }}</p>
    <p><b>Prix : </b>{{ $livre->price }} €</p>


    <a href="/">Retour à la liste des livres</a>



</body>

</html>
