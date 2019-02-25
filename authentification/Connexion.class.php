<?php

class Connexion {

    protected $connect;

    //Constructeur afin d'appeler ma connection à chaque instanciation de ma class Requete
    public function __construct($connect){
        $this->connect = $connect;
    }

    //Méthode pour une connexion à ma page d'administration
    public function login(){
    
        if( isset($_POST) && !empty($_POST["pseudo"]) && !empty($_POST["pwd"])){
            $pseudo = htmlspecialchars(addslashes(trim($_POST["pseudo"])));
            $pass = MD5(htmlspecialchars(addslashes(trim($_POST["pwd"]))));
        }
        
        $sql = "SELECT * FROM admin WHERE Pseudo = ? AND Pass = ?";
        $res = $this->connect->prepare($sql);
        $res->execute(array($pseudo, $pass));
        //Résultat de la requete
        $resOk = $res->fetch();

        //Vérification que le pseudo et le pass entré existe dans la base de donnée
        if($resOk){
            header("Location:../admin/vetements.php");
        }else{
            echo"Erreur";
        }
        
    
        
            
            
        
        
    }
    
}







?>