<?php

$pageTitle = 'Ajout';
include_once 'fragment/header.php';
?>
<br/>
<div class="container">
<form>
    <div class="form-group" action="Actions/processAjout" method="post">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" id="firstName" placeholder="First Name">
    </div>
    <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
