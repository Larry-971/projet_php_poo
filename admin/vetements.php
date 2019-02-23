<?php 
//Appel de ma connection et de mes différentes class
require_once("connect.php");
require_once("../Vetement.class.php");
require_once("../Requete.class.php");

//Instanciation de ma class Requete en lui passant la connexion $connect en parametre
$requete = new Requete($connect);

//Consommation de ma méthode affiche_donnees() de ma class Requete afin d'afficher mes données sur ma page
$data = $requete->affiche_donnees(); 

//Inclusion de mon header
require_once("../partials/header.php");

?>

<h1 class="h2">Listes des produits disponible</h1>
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
            </tr>
        <?php } ?>
    </tbody>    
</table>

<?php require_once("../partials/footer.php"); ?>