<?php
//Connexion à ma base de donnée : projet_php
try{
    $connect = new PDO("mysql:host=localhost;dbname=projet_php", "Larry", "TLarry110196");
    //echo"Connexion à la base : projet_php réussie...";
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){
    //die("Erreur : " . $e->getMessage());
    die("Erreur de connexion à la base : veuillez contacter l'administrateur au 07 25 45 78 21");

}

?>