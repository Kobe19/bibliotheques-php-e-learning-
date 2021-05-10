<?php ob_start() ?>

<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombres de pages</th>
        <th colspan="2">Actions</th>     
    </tr>
    <tr>
        <td class="align-middle"><img src="public/images/liv.jpg" width="50px;"></td>
        <td class="align-middle">Algorithmique selon DAniel</td>
        <td class="align-middle">300</td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Suprimer</a></td>
    </tr>
    <tr>
        <td class="align-middle"><img src="public/images/liv.jpg" width="50px;"></td>
        <td class="align-middle">Angular selon DAniel</td>
        <td class="align-middle">200</td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Suprimer</a></td>
    </tr>
</table>
<a href="" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les livres de la bibliotheque";
require "template.php";
?>