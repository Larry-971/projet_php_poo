<?php 
//Class Requete qui me permettra d'appeler toutes mes requêtes

class Requete {
    //Variable d'instance $connect afin de récupérer ma connexion
    protected $connect;

    //Constructeur afin d'appeler ma connection à chaque instanciation de ma class Requete
    public function __construct($connect){
        $this->connect = $connect;
    }

    /****************************** Methode pour afficher mes données *****************/
    
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
    } //Fin de la méthode

    /********************* Méthode pour ajouter nouveau vêtement *******************/

    public function ajout_vetement(){

        //Traitement pour la soumission
        if(isset($_POST["enregistrer"])){

            //Prendre un champs pour faire valider du coté serveur --> la marque
            if(isset($_POST) && isset($_FILES["photo"]) && !empty($_POST["marque"])){

                /* Traitement de la photo */
                $file_name = $_FILES["photo"]["name"]; // --> recupère le nom de la photo
                $tmp_name = $_FILES["photo"]["tmp_name"]; // --> recupère le chemin de stockage temporaire
                $destination = "images/$file_name"; // --> nouveau chemin de stockage de l'image

                //on va déplacer l'image de l'emplacement temporaire à notre dossier image
                move_uploaded_file($file_name, $destination); //(nom de l'emplacement temporaire, la destination)

                $nom = htmlspecialchars(trim(addslashes($_POST["nom"])));
                $modele = htmlspecialchars(trim(addslashes($_POST["modele"])));
                $marque = htmlspecialchars(trim(addslashes($_POST["marque"])));
                //Transtypage du prix en (double) comme dans la base de donnée
                $prix = (double)htmlspecialchars(trim(addslashes($_POST["prix"])));
                $pays = htmlspecialchars(trim(addslashes($_POST["pays"])));
                $description = trim(addslashes($_POST["description"]));
            }
        }
        //Requete d'insertion de nouvel donnée
        $sql = "INSERT INTO vetements(nom, modele, marque, photo, prix, pays, description) VALUES(?,?,?,?,?,?,?)";
        
        //Préaparation de la requete
        $res = $this->connect->prepare($sql);

        //Exécution de la requete avec pour parametre les variables récupérer via $_POST
        $ok = $res->execute(array($nom, $modele, $marque, $file_name, $prix, $pays, $description));

        //Vérification et notification de l'insertion
        if($ok){
            header("Location:vetements.php");
        }else{
            echo"Erreur d'insertion...";
        }

    } //Fin de la méthode

    /************************Méthode pour supprimé ***************************/

    public function supprimer($id){
        if(isset($_GET["Id"])){
            $id = $_GET["Id"];
            $sql = "DELETE FROM vetements WHERE Id = $id";
            $ok = $this->connect->exec($sql);
            if($ok){
                header("Location:vetements.php");
            }else{
                echo"Erreur lors de la suppression...";
            }
        }
        
    } //Fin de la méthode

    /************************Méthode pour mise à jour ***************************/
    public function maj(){

        if(isset($_GET["Id"])){
            $id = $_GET["Id"];
            $sql = "SELECT * FROM vetements WHERE Id = ?";
            $res = $this->connect->prepare($sql);
            $res->execute(array($id));
            //Affiche données
            $donnees = $res->fetch();

            return $donnees;
        
            //MAJ
            if(isset($_POST["mettre_a_jour"])){
                if(isset($_POST)){

                    $file_name = $_FILES["photo"]["name"]; // --> recupère le nom de la photo
                    $tmp_name = $_FILES["photo"]["tmp_name"]; // --> recupère le chemin de stockage temporaire
                    $destination = "images/$file_name"; // --> nouveau chemin de stockage de l'image

                    //on va déplacer l'image de l'emplacement temporaire à notre dossier image
                    move_uploaded_file($file_name, $destination); //(nom de l'emplacement temporaire, la destination)

                    //$id = (int)htmlspecialchars(trim(addslashes($_POST["Id"])));
                    $nom = htmlspecialchars(trim(addslashes($_POST["nom"])));
                    $modele = htmlspecialchars(trim(addslashes($_POST["modele"])));
                    $marque = htmlspecialchars(trim(addslashes($_POST["marque"])));
                    $oldphoto = trim(addslashes($_POST["oldphoto"]));
                    //Transtypage du prix en (double) comme dans la base de donnée
                    $prix = (double)htmlspecialchars(trim(addslashes($_POST["prix"])));
                    $pays = htmlspecialchars(trim(addslashes($_POST["pays"])));
                    $description = trim(addslashes($_POST["description"]));
                    
                    // Traitement pour image par défaut
                    $photo = "";

                    if($file_name){
                        $photo = $file_name;
                    }else{
                        $photo = $oldphoto;
                    }
                }
                //Requete pour mise à jour
                $sql = "UPDATE vetements SET Nom = ?, Modele = ?, Marque = ?, Photo = ?, Prix = ?, Pays = ?, Description = ? WHERE Id = ?";
                $res = $this->connect->prepare($sql);
                $ok = $res->execute(array($nom, $modele, $marque, $photo, $prix, $pays, $description, $id));
                if($ok){    
                    var_dump($_POST);
                    var_dump($_FILES);
                }else{
                    echo"Erreur lors de la mise à jour...";
                }
            }
        }

    }//Fin méthode

} //Fin class Requete

?>