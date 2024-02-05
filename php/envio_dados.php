<?php
    //CONTROLE DE ACESSO
    session_start();

    if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user']))
    {
        echo "";
    }
    else
    {
        header("Location: login.php");
    }


 $dsn = "mysql:dbname=tcc_usuario;host=localhost";
 $dbuser = "root";
 $dbpass = "";

 if($_POST){
   $ponto = $_POST['pontos'];

   try { // similar ao if e else // entre
           $db = new PDO($dsn, $dbuser, $dbpass);

           $userId = $_SESSION["id_user"];
           // o db entra no mysql
           
           $sql = $db->query("UPDATE perfil 
           SET point = '".$ponto."'
           WHERE id_user = '$userId' ");
           
           
           // aqui ele insere uma query
           // em tb_cadastro nestas linhas de dados adcionar os valores vindos das variáveis com $
           //$db -> exec($sql);
           // os .. criam um mini array separa os dados  as '' separar os dados um do outro ""digitar o nome da variável
           //echo "Cadastro efetuado com sucesso!";
           header("Location: pontos.php");
       }
       
       catch(PDOException $erro) { // não entre
           echo "Erro ao conectar ao BD:" . $erro->getMessage();
       }
 }
