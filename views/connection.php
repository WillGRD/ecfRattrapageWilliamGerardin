

<?php 
session_start();   //On lance la session


?>
<form action="../models/connection.php" method="post">

    <label for="username">user name</label>
    <input type="text" name="username" id="username">
    <label for="password">password</label>
    <input type="password" name="password" id="password">
    <button type="submit">Connexion</button>

</form>






