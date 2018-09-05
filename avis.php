<?php

ini_set('display_errors', 1);

    require_once 'avis.class.php';
    if(isset($_POST['add'])){
        $avis = new Avis($_POST['question1'], $_POST['question2'], $_POST['coordonnee'], $_POST['dispo']);
        $avis -> addAvis($avis);
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Enregistrement d'un avis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>

<body>
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
        <button id="oui">Oui</button>
        <button id="non">Non</button>
    </div>

    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
</body>

</html>