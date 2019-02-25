<?php
//Appel de ma connection et de mes différentes class
require_once("connect.php");
require_once("../Vetement.class.php");
require_once("../Requete.class.php");

//Instanciation de ma class Requete en lui passant la connexion $connect en parametre
$requete = new Requete($connect);

//Consommation de ma méthode maj_affiche() de ma class Requete afin d'afficher mes données
$data = $requete->maj_affiche(); 

//Consommation de ma methode maj_vetement() pour modifier un vetement
if(isset($_POST["mettre_a_jour"])){
    $requete->maj_vetement();
}

require_once("../partials/header.php");
?>

<h2>Mise à jour du produit : <?php echo $data["Nom"] ." " . $data["Marque"];  ?></h2>
<form action="" method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="id"><b><span>*</span>Id</b></label>
                <input type="text" class="form-control" readonly name="id" value="<?php echo $data["Id"]; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="nom"><b><span>*</span>Nom</b></label>
                <input type="text" id="nom" name="nom" class="form-control" placeholder="Entrez le nom" maxlength="30" value="<?php echo $data["Nom"]; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="modele"><b><span>*</span>Modele</b></label><br>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="modele">Modele</label>
                    </div>
                    <select class="custom-select" id="modele" name="modele" required>
                        <option selected><?php echo $data["Modele"]; ?></option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="marque"><b><span>*</span>Marque</b></label>
                <input type="text" id="marque" name="marque" class="form-control" placeholder="Entrez la marque" maxlength="30" value="<?php echo $data["Marque"]; ?>" required >
            </div>
            <div class="form-group col-md-6">
                <label for="photo"><b><span>*</span>Photo</b></label>
                <img src="../images/<?php echo $data["Photo"]; ?>" alt="image_produit" width="100" heigth="100">
                <input type="file" class="form-control-file" id="photo" name="photo">
                <!--Champs hidden afin de récupérer l'image par défaut   -->
                <input type="hidden" value="<?php echo $data["Photo"]; ?>" name="oldphoto" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="prix"><b><span>*</span>Prix</b></label>
                <input type="number" id="prix" name="prix" class="form-control" placeholder="Entrez le prix" value="<?php echo $data["Prix"]; ?>" max="100000" required>
            </div>
            <div class="form-group col-md-6">
                <label for="pays"><b><span>*</span>Pays</b></label>
                <input type="text" id="pays" name="pays" class="form-control" placeholder="Entrez le pays" maxlength="30" value="<?php echo $data["Pays"]; ?>" required >
            </div>
            <div class="form-group col-md-12">
                <label for="description"><b><span>*</span>Description</b></label>
                <textarea class="form-control" id="description" rows="3" name="description" placeholder="Entrez la description du produit" required><?php echo $data["Description"]; ?></textarea>
            </div>
        </div>
    <?php  ?>     
    <button type="submit" class="btn btn-success btn-lg btn-block" name="mettre_a_jour" >Mettre à jour</button>
</form>

<?php
require_once("../partials/footer.php");
?>