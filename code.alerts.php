<?php

if (isset($_SESSION["alert"])) {
    $alert = $_SESSION["alert"];


?>


    <div class="container">

        <div class="alert alert-success alert-dismissible my-3">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong></strong> <?php echo $alert; ?>
        </div>


    </div>

<?php

    unset($_SESSION["alert"]);
}

?>