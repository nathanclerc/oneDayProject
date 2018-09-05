<?php

ini_set('display_errors', 1);

    require_once 'object/avis.class.php';
    /*When Valider button is press create an object with form data and execute method add for push data to database*/
    if(isset($_POST['add'])){
        $avis = new Avis($_POST['question1'], $_POST['question2'], $_POST['coordonnee'], $_POST['dispo']);
        $avis -> add($avis);
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Enregistrement d'un avis</title>
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
    <div>
        <h1>Questionnaire anonyme</h1>
    </div>
    <form method="post">
        <div>
            <label for="question1">Quels stands, ateliers ou présentations avez-vous le plus apprécié ?</label>
            <input type="text" name="question1">
        </div>
        <div>
            <label for="question2">Quelles sont vos attentes vis-à-vis de notre structure ?</label>
            <input type="text" name="question2">
        </div>
        <div id="coord">
            <label for="coordonnee">Coordonnées</label>
            <input type="text" name="coordonnee">
        </div>
        <div id="dispo">
            <label>Date et heure de disponibilité</label>
            <input type="text" name="dispo">
        </div>
        <div id="valider">
            <button type="submit" name="add">Valider</button>
        </div>
    </form>
    <div id="bool">
        <label>Souhaitez-vous être recontacté?</label>
        <div>
            <button id="oui">Oui</button>
            <button id="non">Non</button>
        </div>
    </div>

    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
</body>

</html>