<?php
//Déconnexion en détruisant la session
session_start();
// Nétoyer la session 
session_unset();
//Détruire la session
session_destroy();
//Redirection vers formulaire de connexion
header('Location:../connexion.php');
?>