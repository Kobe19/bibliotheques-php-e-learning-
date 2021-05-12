<?php 
require_once "Livres.class.php";
$l1 = new Livre(1, "Algebre 1A", 300, "liv.jpg");
$l2 = new Livre(2, "Analyse Lineaire", 200, "liv.jpg");
$l3 = new Livre(3, "MAths pour infos", 500, "liv.jpg");
$l4 = new Livre(4, "Physique du reel", 100, "liv.jpg");

require_once "LivreManager.class.php";
$livreManager = new LivreManager();
$livreManager->ajoutLivre($l1);
$livreManager->ajoutLivre($l2);
$livreManager->ajoutLivre($l3);
$livreManager->ajoutLivre($l4); 

ob_start() ?>

<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombres de pages</th>
        <th colspan="2">Actions</th>     
    </tr>
    <?php for($i=0; $i < count($livreManager->getLIvres()); $i++) :  ?>
    <tr>
        <td class="align-middle"><img src="public/images/<?= $livreManager->getLIvres()[$i]->getImage(); ?>" width="50px;"></td>
        <td class="align-middle"><?= $livreManager->getLIvres()[$i]->getTitre(); ?></td>
        <td class="align-middle"><?= $livreManager->getLIvres()[$i]->getNbpages(); ?></td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Suprimer</a></td>
    </tr>
    <?php endfor; ?>
</table>
<a href="" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les livres de la bibliotheque";
require "template.php";
?>