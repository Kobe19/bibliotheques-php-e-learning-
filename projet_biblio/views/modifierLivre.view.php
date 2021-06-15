<?php 
ob_start() ?>

<form method="POST" action="<?= URL ?>livres/mv" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="titre">Titre : </label>
    <input type="text" class="form-control" id="titre" name="titre" value="<?= $livre->getTitre() ?>">
  </div>
  <div class="mb-3">
    <label for="nbPages">Nombre de pages : </label>
    <input type="number" class="form-control" id="nbPages" name="nbPages" value="<?= $livre->getNbpages() ?>">
  </div>
  <h3>Images : </h3>
  <img width="250px" src="<?= URL ?>public/images/<?= $livre->getImage() ?>">
  <br/><br/>
  <div class="mb-3">
    <label for="image">Changer l'image : </label>
    <input class="form-control" type="file" id="image" name="image">
  </div>
  <input type="hidden" name="identifiant" value="<?= $livre->getId(); ?>">
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
$titre = "modification du livre ".$livre->getId();
require "template.view.php";
?>