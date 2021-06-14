<?php 
ob_start() ?>

<form method="POST" action="<?= URL ?>livres/av" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="titre">Titre : </label>
    <input type="text" class="form-control" id="titre" name="titre">
  </div>
  <div class="mb-3">
    <label for="nbPages">Nombre de pages : </label>
    <input type="number" class="form-control" id="titre" name="titre">
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">image : </label>
    <input class="form-control" type="file" id="formFile">
  </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
$titre = "Ajout d'un livre";
require "template.view.php";
?>