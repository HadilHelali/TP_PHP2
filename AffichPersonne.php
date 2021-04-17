<?php
    $pageTitle = 'Affichage';
include_once 'fragment/header.php';
$Personne = [
    'fatma' => 'laribi',
    'ahmed' => 'mahfoudhi',
    'salem' => 'hamdani'
];
?>
<br/>
<br/>
<div class="container">
<table class="table">
    <thead>
    <tr>
        <th scope="col"> </th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col"></th>
        <th scope="col"><a href="AjoutPersonne.php"><i class="fa fa-plus-square"></i></a></th>

    </tr>
    </thead>
    <tbody>
    <?php
    foreach($Personne as $firstName => $lastName) { ?>
        <tr>
            <td> </td>
            <td><?= $firstName ?></td>
            <td><?= $lastName ?></td>
            <td><a href="ModifPersonne.php"><i class="fa fa-edit" ></i></a></td>
            <td><a href="SuppPersonne.php"><i class="fa fa-trash" ></i></a></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
</div>
<br/>

</body>