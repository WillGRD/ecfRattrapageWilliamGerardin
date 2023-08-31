<!--  Un formulaire avec 3 champs et un bouton de type submit pour envoyer le formulaire vers la page addPlat.php en méthode  -->
<form action="../../models/plats/addPlat.php" method="post">
    <label for="nom">Nom du plat</label>
    <input type="text" name="nom" id="nom">
    <label for="desc">Description du plat</label>
    <input type="text" name="desc" id="desc">
    <label for="price">Prix du plat</label>
    <input type="number" name="prix" id="price">
    <input type="submit" value="valider">
</form>    
