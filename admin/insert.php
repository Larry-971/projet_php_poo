<?php
    //Ne peut pas appeler une methode php en cliquant sur bouton
    require_once("connect.php");
    require_once("../Requete.class.php");
    //Appele de ma méthode ajout_vetement() sur un page .php puis redirection si l'ajout est réussi
    $requete = new Requete($connect);
    var_dump($_POST);
    $requete->ajout_vetement();

?>