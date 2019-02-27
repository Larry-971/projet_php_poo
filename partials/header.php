<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des vêtements disponible</title>
    
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <!-- Style -->
    <style>
        #banniere{
            width : 100%;
        }
        #banniere>img{
            width: 100%;
            height: max-content;
        }
        td>img{
            height : 100px;
        }
    </style>
</head>
<body>  
    <nav class="navbar navbar-light bg-dark ">
        <a class="nav-link text-white" href="../index.php">Accueil</a>
        <a class="nav-link text-white" href="../admin/vetements.php">Vêtements</a>
        <a class="nav-link text-white" href="../authentification/deconnexion.php">Déconnexion</a>
    </nav>
    <div id="banniere">
        <img src="../images\banniere_vetements_ancenis.png" alt="" srcset="">
    </div>

    <div class="container">