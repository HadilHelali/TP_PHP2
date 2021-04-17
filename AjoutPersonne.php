<?php

$pageTitle = 'Ajout';
include_once 'fragment/header.php';
?>
<br/>
<div class="container">
<form action="Actions/processAjout" method="post">

    <div class="form-group" >
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" id="firstName" placeholder="First Name">
    </div>
    <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
    </div>
    <div class="form-group" >
    <button type="submit" class="btn btn-primary btn-lg btn-block" >Submit</button>
    </div>
</form>
    </div>
</body>
