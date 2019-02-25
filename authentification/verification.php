<?php

session_start();
//Si la session n'existe pas on redirige vers le formulaire de connexion
if(!isset($_SESSION['auth'])){
    //Retour à la page de connexion
    header("Location:../authentification/connexion.php");
}

?>