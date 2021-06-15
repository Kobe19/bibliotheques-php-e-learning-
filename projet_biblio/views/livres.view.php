<?php 
//$l1 = new Livre(1, "Algebre 1A", 300, "liv.jpg");
//$l2 = new Livre(2, "Analyse Lineaire", 200, "liv.jpg");
//$l3 = new Livre(3, "MAths pour infos", 500, "liv.jpg");
//$l4 = new Livre(4, "Physique du reel", 100, "liv.jpg");

//$livreManager->ajoutLivre($l1);
//$livreManager->ajoutLivre($l2);
//$livreManager->ajoutLivre($l3);
//$livreManager->ajoutLivre($l4); 

require_once "models/LivreManager.class.php";
$livreManager = new LivreManager;
$livreManager->chargementLivres();

ob_start() ;

if(!empty($_SESSION['alert'])) :
?>
<div class="alert alert-<?= $_SESSION['alert']['type'] ?>" role="alert">
    <?= $_SESSION['alert']['msg'] ?>
</div>
<?php 
unset($_SESSION['alert']);
endif; 
?>
 

<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombres de pages</th>
        <th colspan="2">Actions</th>     
    </tr>
    <?php 
    for($i=0; $i < count($livreManager->getLIvres()); $i++) :  
    ?>
    <tr>
        <td class="align-middle"><img src="public/images/<?= $livres[$i]->getImage(); ?>" width="50px;"></td>
        <td class="align-middle"><a href="<?= URL ?>livres/l/<?= $livres[$i]->getId(); ?>"><?= $livres[$i]->getTitre(); ?></td>
        <td class="align-middle"><?= $livres[$i]->getNbpages(); ?></td>
        <td class="align-middle"><a href="<?= URL ?>livres/m/<?= $livres[$i]->getId(); ?>" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle">
            <form method="POST" action="<?= URL ?>livres/s/<?= $livres[$i]->getId(); ?>" onSubmit="return confirm('voulez vous vraiment supprimer le livre?');">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endfor; ?>
</table>
<a href="<?= URL ?>livres/a" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les livres de la bibliotheque";
require "template.view.php";
?>