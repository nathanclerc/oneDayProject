<?php

ini_set('display_errors', 1);

    require_once 'object/visiteur.class.php';
    /*When Valider button is press create an object with form data and execute method add for push data to database*/
    if(isset($_POST['add'])){
        $visit = new Visiteur($_POST['nom'], $_POST['prenom'], $_POST['entreprise'], $_POST['poste'], $_POST['info']);
        $visit -> add($visit);
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Enregistrement d'un visiteur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item col-4">
                    <a class="nav-link" href="index.php">Enregistrer un visiteur</a>
                </li>
                <li class="nav-item col-4">
                    <a class="nav-link" href="#">Consulter les visiteurs</a>
                </li>
                <li class="nav-item col-4">
                    <a class="nav-link" href="avis.php">Enregistrer un avis</a>
                </li>
                <li class="nav-item col-4">
                    <a class="nav-link" href="#">Consulter les avis</a>
                </li>
                <li class="nav-item col-4">
                    <a class="nav-link" href="#">Statistiques</a>
                </li>
            </ul>
        </div>
    </nav>
    <form method="post">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom">
        </div>
        <div>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom">
        </div>
        <div>
            <label for="entreprise">Entreprise</label>
            <input type="text" name="entreprise">
        </div>
        <div>
            <label for="poste">Poste</label>
            <input type="text" name="poste">
        </div>
        <div>
            <label for="info">Ou avez-vous entendu parler de cet événement ?</label>
            <select name="info">
                <option>Presse</option>
                <option>Internet</option>
                <option>Bouche à oreilles</option>
                <option>Autre</option>
            </select>
        </div>
        <div>
            <button type="submit" name="add">Valider</button>
        </div>
    </form>

</body>

</html>