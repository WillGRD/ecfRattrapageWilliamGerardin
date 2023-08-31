<?php
require_once('dbconnect.php');   // On appelle le fichier de conexion de la base de donnée
session_start();                 // On démarre la session
$usern = $_POST["username"];     //On récupére les variable envoyer du formulaire en méthode POST
$passw = $_POST["password"];     //On récupére les variable envoyer du formulaire en méthode POST
if (!empty($usern) && !empty($passw)) {       //On vérifie que toute les variables ne soit pas vide
    $conection = $pdoConn->prepare("SELECT * FROM users WHERE username = :user AND password = :pwd"); //On prépare la requete
    $conection->bindParam('user', $usern);   //On ajoute les paramétres à la requete
    $conection->bindParam('pwd', $passw);    //On ajoute les paramétres à la requete

    $conection->execute();    //On execute la requete
    $isconnected = $conection->rowCount();    //On compte les lignes de la requete

    if ($isconnected === 1) {    //On fait une condition (si le nombre de ligne est strictement égale à un)
        $_SESSION['user'] = $usern;    //On va stocké ce que l'utilisateur rentre dans un tableau SI l'utilisateur existe
        header('Location: ../index.php');   //Charge l'entéte de la page, redirection vers index.php

     //Si le champ est vide on reste sur la page connection pour remplir le champ correctement
    } else {            
        header('Location: ../views/connection.php');   
    }
} else {
    echo 'Il faut renseigner les champs';   //On affiche le echo quand l'utilisateur ne renseigne pas au moins un des champs
}
