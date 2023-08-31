<?php

// Inclusion du fichier de connexion à la base de données
require_once('../dbConnect.php');

// Récupération des données du formulaire envoyé par la méthode POST
$nom = $_POST["nom"];           // Récupération du nom du plat


$desc = $_POST["desc"];         // Récupération de la description du plat
$price = floatval($_POST["prix"]); // Récupération du prix du plat (converti en valeur décimale)

// Vérification si les données ne sont pas vides
if(!empty($nom) && !empty($desc) && !empty($price)) {

// Préparation de la requête d'ajout dans la base de données
$requeteAjout = $pdoConn->prepare("INSERT INTO plats(name, description, price) VALUES (?, ?, ?)");

// Exécution de la requête préparée avec les données fournies
$requeteAjout->execute(array($nom, $desc, $price));
// Affichage d'un message en cas de succès
    echo 'Plat bien ajouté';

// Redirection vers la page d'accueil
header('Location: ../../index.php');
} 

else {
    // Affichage d'un message en cas de champ(s) vide(s)
    echo 'Il ne peut pas y avoir de champ vide';
}

?>