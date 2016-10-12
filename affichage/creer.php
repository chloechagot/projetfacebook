<?php
// La page du formulaire de création d'un compte.
// Le formulaire sera envoyé vers ../traitement/creercompte.php


session_start();
include("../divers/connexion.php");
include("../divers/balises.php");



include("entete.php");

// Il faut faire des requêtes pour afficher ses amis, les attentes, les gens qu'on a invités qui ont pas répondu etc..
// Elles sont listées ci-dessous
// Connaitre ses amis : 



?>

<h1>Inscription</h1>
    <form method='POST' action="">
    
        <label for='sexe'>Sexe</label>
        <select name="sexe">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            
        </select><br /><br />
        
         <label for='situation'>Situation</label>
        <select name="situation">
            <option value="Célibataire">Célibataire</option>
            <option value="En couple">En couple</option>
            <option value="Divorcé(e)">Divorcée</option>
            <option value="Veuf(ve)">Veuf(ve)</option>
            
        </select><br /><br />
        
        <label for="pseudo"> pseudo : </label>
        <input type="text" name="pseudo"> <br />
        
        <label for="email"> email : </label>
        <input type="email" name="email"> <br />
        
         <label for="password"> mot de passe: </label>
        <input type="password" name="password"> <br />
        
        <label for="repeatpassword"> confirmer votre mot de passe: </label>
        <input type="password" name="repeatpassword"> <br />
        
        <input type="submit" value="s'inscrire" name="submit"> 
        
        
    </form>

<a href='index.php?page=login'>Retourner à la connexion </a>

<?php

include("pied.php");
?>