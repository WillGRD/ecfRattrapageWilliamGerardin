<?php

    // Informations permettant d'établir une connexion à la base de données intitulée mesbonspetitsplats.
    $env = "localhost";
    $dbName = "mesbonspetitsplats";
    $dbUser = "root";
    $dbPwd = "Bubulle02400.";

    // Stockage de l'état de la connexion à la base de données dans la variable $pdoConn.
    $pdoConn = new \PDO('mysql:host='.$env.';dbname='.$dbName.';charset=utf8',$dbUser,$dbPwd);
?>