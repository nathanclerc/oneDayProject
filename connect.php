<?php

    try {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'x','x', $pdo_options);
    }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br />";
        die();
    }

?>
