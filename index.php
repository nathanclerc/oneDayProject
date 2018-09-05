<?php

ini_set('display_errors', 1);

    require_once 'visiteur.class.php';
    if(isset($_POST['add'])){
        $visit = new Visiteur($_POST['nom'], $_POST['prenom'], $_POST['entreprise'], $_POST['poste'], $_POST['info']);
        $visit -> addVisiteur($visit);
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
    <link rel="stylesheet" type="text/css" media="screen" href="sytle.css" />
</head>

<body>
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
            <label for="info" >Ou avez-vous entendu parler de cet événement ?</label>
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