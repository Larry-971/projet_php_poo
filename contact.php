<?php 
$title = "Contact";
require_once("partials_front/header.php");
?>
<hr>
<h3 class="text-center">Contactez nous !</h3>
<div>
    <img src="images\bannière-contact-1280px276px.jpg" alt="image" width="1200" srcset="">
</div>
<br>
<div class="row">
    <div class="form-group col-sm-6">
        <label for="name" class="h4">Nom</label>
        <input type="text" class="form-control" id="name" placeholder="Entrez votre nom" required>
    </div>
    <div class="form-group col-sm-6">
        <label for="email" class="h4">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
    </div>
    </div>
    <div class="form-group">
        <label for="message" class="h4 ">Message</label>
        <textarea id="message" class="form-control" rows="5" placeholder="Entrez votre message" required></textarea>
    </div>
    <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Envoyer</button>
</div>

<?php require_once("partials_front/footer.php"); ?>
