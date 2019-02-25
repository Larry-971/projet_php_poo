<?php
//Vérification qu'il y a une seesion de démarré pour accéder à la page d'administration
//Si on tape 'admin' dans l'url
if(!empty($_SESSION['auth'])){
    //Retour à la page de connexion
    header("Location:../connexion.php");
}








?>