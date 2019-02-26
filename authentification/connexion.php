<?php
require_once("../admin/connect.php");
require_once("Connexion.class.php");

//Initialisation de mon message d'erreur
$message = "";
if(isset($_POST["connexion"])){
    //Instanciaton de ma class Connexion
    $connexion = new Connexion($connect);

    //Consommation de ma méthode login()
    $connexion->login();
    //Affiche message si pseudo et mot de passe sont incorrect
    $message = "<div class='alert alert-danger' role='alert'>Pseudo ou mot de passe incorrect...</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion à ma page d'administration</title>
    <!-- Css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrapp -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-center"><b>Veuillez vous authentifier afin d'accéder à l'administration<b/></h2>
        <div class="row col-md-4 offset-md-3">
            <form action="" method="POST" autocomplete="off"> <!--Permet de ne pas enregistrer les pseudo-->
                <div class="form-group">
                    <label for="pseudo"><b><span>*</span>Pseudo</b></label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Entrer votre pseudo" name="pseudo" required>
                </div>
                <div class="form-group">
                    <label for="pwd"><b><span>*</span>Mot de passe</b></label>
                    <input type="password" class="form-control" id="pwd" placeholder="Entrer votre password" name="pwd" required>
                </div>
                <!-- Message d'erreur -->
                <?php echo $message; ?>
                <button type="submit" class="btn btn-primary btn-block" name="connexion">Connecter</button>
                <em><b>(<span>*</span>) Ces champs sont obligatoires</b></em>
            </form>
        </div>
    </div>
</body>
</html>