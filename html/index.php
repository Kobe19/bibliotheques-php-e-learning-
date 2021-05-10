<?php ob_start() ?>

Ici le contenu de ma page d'accueil ! 

<?php
$content = ob_get_clean();
$titre = "Bibliotheques MDA";
require "template.php";
?>