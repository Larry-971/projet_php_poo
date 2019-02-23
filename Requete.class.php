<?php 
//Class Requete qui me permettra d'appeler toutes mes requêtes

class Requete {
    //Variable d'instance $connect afin de récupérer ma connexion
    protected $connect;

    //Constructeur afin d'appeler ma connection
    public function __construct($connect){
        $this->connect = $connect;
    }

    //Methode pour afficher mes données
    public function affiche_donnees(){
        //Tableau pour mettre les données récupérées
        $donnees = [];

        //Requête pour récupérer les données de ma base
        $sql = "SELECT * FROM vetements";

        //Stock le résultat de la requête dans $res On donne la requete ($sql) en parametre afin que query() l'affiche
        $res = $this->connect->query($sql);

        //Parcourir les résultat, qui est retourné sous forme de tableau avec le fetch()
        while($rows = $res->fetch()){
            //Remplisage de ma Class Vetement avec les valeur récupérer dans la base
            $vetement = new Vetement();
            $vetement->setId($rows["Id"]);
            $vetement->setNom($rows["Nom"]);
            $vetement->setModele($rows["Modele"]);
            $vetement->setMarque($rows["Marque"]);
            $vetement->setPhoto($rows["Photo"]);
            $vetement->setPrix($rows["Prix"]);
            $vetement->setPays($rows["Pays"]);
            $vetement->setDescription($rows["Description"]);

            //Je met mes Vetement dans mon tableau de donnees
            array_push($donnees, $vetement);
        }
        return $donnees;

    }

}

?>