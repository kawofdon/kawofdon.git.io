<?php

    $dsn = "mysql:dbname=tcc_usuario;host=localhost;charset=utf8"; // dados para conexao com o banco (qual BD e onde esta)
    $dbuser = "root"; // usuario
    $dbpass = ""; //senha
    // $mysqli = new mysqli($host, $usuario, $senha, $bd);

    // if($mysqli->connect_errno)
    //     echo "Falha na conexão (".$mysqli->connect_errno.")".$mysqli->conconnect_error;
    try{
        $mysqli = new PDO($dsn, $dbuser, $dbpass);
    }
    catch(PDOException $e){
        echo "Falhou: ".$e->getMessage();
    }
?>