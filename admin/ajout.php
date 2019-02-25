<?php
// Sécurisation de la page (si la session n'existe pas on y a pas accès)
require_once("../authentification/verification.php");

//Ne peut pas appeler une methode php en cliquant sur bouton
require_once("connect.php");
require_once("../Requete.class.php");
//Appele de ma méthode ajout_vetement() sur un page .php puis redirection si l'ajout est réussi
$requete = new Requete($connect);
$requete->ajout_vetement();

?>