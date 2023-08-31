<?php

    // Récupère la connexion à la base de données
    require_once('../dbConnect.php');

    // Contrôle de l'état de la connexion à la base de données
    if($pdoConn){
        // Si la connexion à la base de donnée est effective :
        
        // Contrôle de l'existance de $_POST 
        if($_POST && $_POST["id"]){
            
            // Stocke le paramètre ID dans une variable
            $platID = $_POST["id"];
    
            // Stockage de la requête SQL au sein de la variable $query.

            $query = $pdoConn->prepare('DELETE FROM plats WHERE id= ?');
            // Execution de la requête sur la base de données.
            $query->execute(array($platID)); // Exécution de la requête préparée en fournissant le platID comme paramètre
            $ligneSupprimer = $querry->rowCount(); // Récupération du nombre de lignes affectées par la requête
            
            // Vérification si le nombre de lignes affectées est différent de 1
            if ($ligneSupprimer !== 1) {
                echo 'Ligne déjà supprimée'; // Affichage d'un message indiquant que la ligne a déjà été supprimée
            }
        }
    }
