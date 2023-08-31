<?php
    // Récupère les informations issues du model getPlats.
    session_start();
    require_once('./models/plats/getAll.php');
?>

<header>
    <h1>Gestion des plats du restaurant&nbsp;:</h1>
</header>
<main>
    <table class="custom-table">
        <thead>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </thead>
        <?php foreach($results as $single){ ?>   <!-- J'affiche une ligne pour chaque résultat dans la base de donnée   -->
            <tr>
                <td><?php echo $single["name"] ?></td>
                <td><?php echo $single["description"] ?></td>
                <td><?php echo $single["price"] ?></td>
                <td>
                    <!-- Je fait une requete get vers la page update.php pour passer l'id de plat en paramétre -->
                    <p><a href="./views/plats/update.php?id=<?php echo $single["id"] ?>" title="Editer ce plat">📝</a></p> 
                </td>
                <td>
                    <!-- Je creer un bouton pour supprimer un plat avec l'id du plat en paramétre en tant que ID -->
                    <button class="btn-sup" id="<?php echo $single["id"] ?>">Supprimer ce plat</button>
                </td>
            </tr>
        <?php } // endForeach ?>
    </table>
    
    <button id="button-add">Ajouter un plat</button>
</main>
