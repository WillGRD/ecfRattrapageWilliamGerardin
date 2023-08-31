<?php

// Inclusion du fichier de connexion à la base de données
require_once('../dbConnect.php');

// Vérification si les données nécessaires ne sont pas vides
if (!empty($nom) && !empty($desc) && !empty($price) && !empty($plat)) {

    // Récupération des données du formulaire envoyé par la méthode POST
    $nom = $_POST["nom"];           // Récupération du nom du plat
    $desc = $_POST["desc"];         // Récupération de la description du plat
    $price = floatval($_POST["prix"]); // Récupération du prix du plat (converti en valeur décimale)
    $plat = $_POST["plat"];         // Récupération de l'ID du plat à mettre à jour

    // Préparation de la requête de mise à jour dans la base de données
    $requeteAjout = $pdoConn->prepare("UPDATE plats SET name = :nom, description = :desc, price = :price WHERE id = :plat");
    
    // Liaison des paramètres avec les valeurs récupérées
    $requeteAjout->bindParam('nom', $nom);
    $requeteAjout->bindParam('desc', $desc);
    $requeteAjout->bindParam('price', $price);
    $requeteAjout->bindParam('plat', $plat);
    
    // Exécution de la requête préparée
    $requeteAjout->execute();
    
    // Redirection vers la page d'accueil après la mise à jour
    header('Location: ../../index.php');
} else {
    // Affichage d'un message si des champs sont manquants
    echo 'Il faut ajouter quelque chose';
}

?>