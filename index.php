<?php
//Appel de ma connection et de mes différentes class pour afficher mes données
require_once("admin/connect.php");
require_once("Vetement.class.php");
require_once("Requete.class.php");

//Instanciation de ma class Requete en lui passant la connexion $connect en parametre
$requete = new Requete($connect);

//Consommation de ma méthode affiche_donnees() de ma class Requete afin d'afficher mes données sur ma page
$data = $requete->affiche_donnees();

$title = "Accueil";
require_once("partials_front/header.php");
?>
<!-- Carousel -->
<div class="bd-example">
  <div id="mon_carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#mon_carousel" data-slide-to="0" class="active"></li>
      <li data-target="#mon_carousel" data-slide-to="1"></li>
      <li data-target="#mon_carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images\legs-434918_640.jpg" class="d-block w-100" height=450 alt="image">
        <div class="carousel-caption d-none d-md-block">
          <h5>Basket blanche</h5>
          <p>Ne cherchez plus les basket de vos rêves, elles sont là.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images\baby-1399332_640.jpg" class="d-block w-100" height=450 alt="image">
        <div class="carousel-caption d-none d-md-block">
          <h5>Chapeau pour bébé</h5>
          <p>Petit chapeau tendance...pour le bébé tendance.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images\blue-2705642_640.jpg" class="d-block w-100" height=450 alt="image">
        <div class="carousel-caption d-none d-md-block">
          <h5>Lunette de soleil</h5>
          <p>L'outil indispensable pour l'été à venir.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#mon_carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#mon_carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<h1 class="h3 text-center">Liste des produits</h1>
<br>

<!-- Carte de produits -->
<div class="d-flex justify-content-around">
    <?php foreach($data as $d){ ?>
        <div class="d-inline-flex justify-content-around">
            <div class="card" style="width: 16rem;">
                <img src="images/<?php echo $d->getPhoto(); ?>" class="card-img-top" alt="image_produit" height="200">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $d->getNom() . " " . $d->getModele() . " : " . $d->getMarque(); ?></h5>
                    <p class="card-text"><a href="#" class="btn btn-success btn-block"><i class="fas fa-shopping-cart"> <?php echo $d->getPrix(); ?> €</i></a></p>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- <br> -->
</div>
<?php require_once("partials_front/footer.php"); ?>