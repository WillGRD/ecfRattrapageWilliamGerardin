<?php

    // Récupère la connexion à la base de données
    require_once('./models/dbConnect.php');

    // Contrôle de l'état de la connexion à la base de données
    if($pdoConn){
    
        // Execution de la requête sur la base de données.
        // Stockage du résultat de l'exécution dans la variable $execution.
        $execution = $pdoConn->prepare('SELECT * FROM plats');

                                                                                                  
        // Contrôle de l'état de l'exécution de la requête SQL
        if($execution->execute()){
            
            // Si la requête s'est exécutée sans accrocs :

            // Stockage de l'ensemble des résultats de la requête dans la variable $results
            $results = $execution->fetchAll(PDO::FETCH_ASSOC);
        }

    }
?>
