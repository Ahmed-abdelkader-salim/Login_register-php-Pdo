<?php

if(isset($_SESSION['success'])){
    ?>
    <div class="alert alert-success p-2">
        <?= $_SESSION['success']?>
    </div>
    <?php
    unset($_SESSION['success']);
}

if(isset($_SESSION['error'])){
    ?>
    <div class="alert alert-danger p-2">
        <?= $_SESSION['error']?>
    </div>
    <?php
    unset($_SESSION['error']);
}

?>