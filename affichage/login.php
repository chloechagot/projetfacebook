
<?php
// La page du formulaire de login (il ressemble étrangement à celui de création de compte
// Le formulaire sera envoyé vers ../traitement/connexion.php


session_start();
include("../divers/connexion.php");
include("../divers/balises.php");



include("entete.php");

// Il faut faire des requêtes pour afficher ses amis, les attentes, les gens qu'on a invités qui ont pas répondu etc..
// Elles sont listées ci-dessous
// Connaitre ses amis : 


    

?>

<h1>Connexion</h1>
  <form method="POST" action="">
<label for="pseudo">pseudo : </label>
<input type="text" name="pseudo"><br />
<label for="password">mot de passe : </label>  
<input type="password" name="password"><br />
<input type="submit" value="connexion" name="submit"> 
</form>

<a href='index.php?page=creer'>Pas encore membre ? inscrivez-vous ici </a>

<?php

include("pied.php");
?>