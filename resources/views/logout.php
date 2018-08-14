<?php
    require_once '../../app/Http/Controllers/loader.php';

    $auth->logout();

    header("Location: home.php");
    exit;
?>
