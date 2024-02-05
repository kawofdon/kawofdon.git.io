<?php
    session_start();

    include("conexão.php");

    $exibirMensagemErro = false;


    if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        try{
            
            $sql = $mysqli->query("SELECT * FROM perfil WHERE email = '$email' AND senha = '$senha'");

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();

                $_SESSION['id_user'] = $dado['id_user'];
                header("Location: index.php");
            }
            else{
                echo "<div class='error-message'>'Usuário ou Senha Inválido'</div>";
                
            }

        } catch(PDOException $e){
            echo "Falhou: ".$e->getMessage();
        }
    } 
?>
