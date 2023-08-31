<form action="../../models/plats/updatePlat.php" method="post">
<?php
session_start();
if(!isset($_SESSION["user"])){
    header('Location: ../connection.php');
}
// Récupère les informations issues du model getPlats.
require_once('../../models/dbConnect.php');
$plat = $_GET["id"];

//$execution = $pdoConn->query($plats);
$plats = $pdoConn->prepare("SELECT * FROM `plats` WHERE id = :plat");  //j'ai optimisé la requéte en remplassant les champs par * et fait une requete préparé
$plats->bindParam('plat', $plat);     //J'ai stocké ma requete dans la variable $plats, je lie ma variable à un paramétre
$plats->execute();     //J'éxécute ma requete

$results = $plats->fetchAll(PDO::FETCH_ASSOC);  //Je récupére toute les lignes de mon tableau pour les stocké dans un tableau associatif

foreach($results as $single) { ?>   <!-- Cette boucle parcours les lignes de ma requete, pour chaque ligne j'affiche 3 champs (nom,desc et prix) -->
    <label for="nom">Nom du plat</label>
    <input type="text" name="nom" id="nom" value="<?php echo $single["name"] ?>">
    <label for="desc">Description du plat</label>
    <input type="text" name="desc" id="desc" value="<?php echo $single["description"] ?>">
    <label for="price">Prix du plat</label>
    <input type="number" name="prix" id="price" value="<?php echo $single["price"] ?>">
    <input type="submit" value="Modifier">
<?php
}
?>




    
    
</form>