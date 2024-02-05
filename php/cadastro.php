<?php
    // session_start();
    include("conexão.php");

    if($_POST){
        $nome = $_POST['nome'];
        $user_name = $_POST['name_user'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
      
        try{ //obrigatorio tentar executar, caso não for pula para o catch
            // $mysqli = new PDO($dsn, $dbbuser, $dbpass);

            $sql = $mysqli -> query("INSERT INTO perfil(primeiro_nome,user,email,cpf,senha)
            values ('".$nome."', '".$user_name."', '".$email."','".$cpf."','".$senha."')");

            echo "<div class='sucesso-message1'><p> Cadastro efetuado com sucesso!</p> </div>";
            header("Location: index.php");
            

        
        }
        catch(PDOException $erro){
            echo '<div class="error-message">Ocorreu um erro ao processar o formulário. Por favor, verifique os dados inseridos e tente novamente.</div>' . $erro -> getMessage();
           
        }
    }
    
?>