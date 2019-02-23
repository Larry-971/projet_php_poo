<?php 
//Appel de ma connection et de mes différentes class
require_once("connect.php");
require_once("../Vetement.class.php");
require_once("../Requete.class.php");

//Instanciation de ma class Requete en lui passant la connexion $connect en parametre
$requete = new Requete($connect);

//Consommation de ma méthode affiche_donnees() de ma class Requete afin d'afficher mes données sur ma page
$data = $requete->affiche_donnees(); 

//Consommation de ma méyhode ajout_vetement


//Inclusion de mon header
require_once("../partials/header.php");

?>

<h1 class="h2">Listes des produits disponible</h1>
<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Nouveau produit</button>
<!-- Affichage de mes données -->
<table class= "table table-striped">
    <thead>
        <th>Id</th>
        <th>Nom</th>
        <th>Modele</th>
        <th>Marque</th>
        <th>Photo</th>
        <th>Prix</th>
        <th>Pays</th>
        <th>Description</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php foreach($data as $d){ ?>
            <tr>
                <td><?php echo $d->getId(); ?></td>
                <td><?php echo $d->getNom(); ?></td>
                <td><?php echo $d->getModele(); ?></td>
                <td><?php echo $d->getMarque(); ?></td>
                <td><?php echo $d->getPhoto(); ?></td>
                <td><?php echo $d->getPrix(); ?></td>
                <td><?php echo $d->getPays(); ?></td>
                <td><?php echo $d->getDescription(); ?></td>
                <td>
                    <a href="editer.php?Id=<?php echo $d->getId(); ?>" class="btn btn-primary">Modifier</a>
                    <a href="delete.php?Id=<?php echo $d->getId(); ?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>    
</table>

<!-- Modal : Formulaire pour nouveau produit -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entrez les caractéristiques de votre produit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulaire -->
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom"><b><span>*</span>Nom</b></label>
                    <input type="text" id="nom" name="nom" class="form-control" placeholder="Entrez le nom" maxlength="30" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="modele"><b><span>*</span>Modele</b></label>
                    <input type="text" id="modele" name="modele" class="form-control" placeholder="Entrez votre modele" maxlength="30" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="marque"><b><span>*</span>Marque</b></label>
                    <input type="text" id="marque" name="marque" class="form-control" placeholder="Entrez la marque" maxlength="30" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="photo"><b><span>*</span>Photo</b></label>
                    <input type="file" class="form-control-file" id="photo" name="photo" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="prix"><b><span>*</span>Prix</b></label>
                    <input type="number" id="prix" name="prix" class="form-control" placeholder="Entrez le prix" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="pays"><b><span>*</span>Pays</b></label>
                    <input type="text" id="pays" name="pays" class="form-control" placeholder="Entrez le pays" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="description"><b><span>*</span>Description</b></label>
                    <textarea class="form-control" id="description" rows="3" name="description" placeholder="Entrez la description du produit" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block" name="enregistrer" >Enregistrer</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<?php require_once("../partials/footer.php"); ?>