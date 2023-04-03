<?php
    session_start();
    if($_SESSION['login'] !== true && !isset($_SESSION['id'])){
        header("Location: login.php");
    }

?>