<?php
    $pageTitle = 'Affichage';
include_once 'fragment/header.php';
?>
<div class="container">
<table class="table">
    <thead>
    <tr>
        <th scope="col"> </th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Jacob</td>
        <td>Thornton</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Larry</td>
        <td>the Bird</td>
    </tr>
    </tbody>
</table>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <a href="AjoutPersonne.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter une personne</a>
        </div>
        <div class="col-sm">
            <a href="ModifPersonne.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Modifier une personne</a>
        </div>
        <div class="col-sm">
            <a href="SuppPersonne.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Supprimer une personne</a>

        </div>
    </div>
</div>

<br/>

</body>