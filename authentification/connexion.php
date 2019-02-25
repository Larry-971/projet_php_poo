<?php
require_once("../admin/connect.php");
require_once("Connexion.class.php");

if(isset($_POST["connexion"])){
    //Instanciaton de ma class Connexion
    $connexion = new Connexion($connect);

    //Consommation de ma méthode
    $connexion->login();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion à ma page d'administration</title>
    <!-- Bootstrapp -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Formulaire de connexion</h2>
        <div class="row col-md-6 offset-md-3">
            <form action="" method="POST" autocomplete="off"> <!--Permet de ne pas enregistrer les pseudo-->
                <div class="form-group">
                    <label for="pseudo">*Pseudo</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Entrer votre pseudo" name="pseudo" required>
                </div>
                <div class="form-group">
                    <label for="pwd">*Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Entrer votre password" name="pwd" required>
                </div>
                <!--
                <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
                </div>-->
                <button type="submit" class="btn btn-primary btn-block" name="connexion">Connecter</button>
            </form>
        </div>
    </div>
</body>
</html>