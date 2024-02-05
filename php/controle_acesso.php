<?php

    session_start();

    if(isset($_SESSION['id_acesso']) && !empty($_SESSION['id_acesso'])){
        echo "";
    }else{
        header("Location: login.php");
    }
?>