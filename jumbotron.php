<?php
    if($_SESSION['user']==""){
        header("location:login.php");
    }
?>
<div class="jumbotron text-light jumb">
    <h1>Hikari's website</h1>
    <h5>just little subtitle.</h5>
</div>