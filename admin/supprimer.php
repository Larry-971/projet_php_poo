<?php

require_once("connect.php");
require_once("../Requete.class.php");
if(isset($_GET['Id'])){
    //Instanciation de ma class Requete qui me permetra d'utiliser ma methode supprimer() via un objet
    $id = $_GET['Id'];
    $requete = new Requete($connect);

    //Appele de ma méthode supprimer()
    $requete->supprimer($id);
   
}






?>