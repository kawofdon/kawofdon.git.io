<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
    <link rel="stylesheet" href="../css/esqueceu_senha.css">

  
    </style>
    <title>Atualizar Senha</title>
</head>
<body>
    
    <?php
        include("conexão.php");
        
        $chave = filter_input(INPUT_GET, 'chave', FILTER_DEFAULT);
        if(!empty($chave)){
            //var_dump($chave);

            $query_usuario = "SELECT id_user
                            FROM perfil
                            WHERE recuperar_senha =:recuperar_senha
                            LIMIT 1";
            $result_usuario = $mysqli->prepare($query_usuario);
            $result_usuario->bindParam(':recuperar_senha', $chave, PDO::PARAM_STR);
            $result_usuario->execute();
    
            if(($result_usuario) AND ($result_usuario->rowCount() != 0)){
                $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                //var_dump($dados);
 
                if(!empty($dados['SendNovaSenha'])){
                    //$nova_senha= password_hash($dados['nova_senha'], PASSWORD_DEFAULT);
                    $nova_senha = $dados['nova_senha'];
                    $recuperar_senha = 'NULL';

                    $query_up_usuario = "UPDATE perfil
                                SET senha = :nova_senha,
                                recuperar_senha = :recuperar_senha
                                WHERE id_user = :id
                                LIMIT 1";
                    $result_up_usuario = $mysqli->prepare($query_up_usuario);
                    $result_up_usuario->bindParam(':nova_senha', $nova_senha, PDO::PARAM_STR);
                    $result_up_usuario->bindParam(':recuperar_senha', $recuperar_senha);
                    $result_up_usuario->bindParam(':id', $row_usuario['id'], PDO::PARAM_INT);

                    if($result_up_usuario->execute()){
                        

                        echo "<div class='sucesso-message1'><p> Senha atualizada com sucesso! </p></div>";
                        // header("Location: login.php");
                        // var_dump($dados);
                        echo "
                            
                            <div class='voltar'>
                                <img src='../img/logo2.jpg'>
                                <p> <a href='./index.php'> Voltar para a página inicial </a></p>
                            </div>";
                    }    
                    else{
                        echo  "<div class='error-message'> <p style='color: #ff0000'> Erro: Tente novamente </div></p>";
                    }
                }
            }
            else{
                $_SESSION['msg'] = "<div class='error-message'> <p style='color: #ff0000'> Erro: Link inválido </p> </div>";
                header("Location: esqueceu_senha.php");

            }
        }
        
        else{
            echo  "<div class='error-message'> <p style='color: #ff0000'> Erro: Link inválido </div></p>";
            header("Location: esqueceu_senha.php");

        }
    ?>


<div class="form-l-c">
    <form action="" method="POST">
        <h3>
            Digite uma nova senha
        </h3>
        <?php
            $usuario = "";
            if(isset($dados['nova_senha'])){
                $usuario = $dados['nova_senha'];
            }
        ?>

        <input type="password" name="nova_senha" placeholder="Digite sua nova senha">
        <?php
            // echo $usuario;
        ?>
        <br><br>
        <input type="submit" value="Atualizar" name="SendNovaSenha">
    </form>
</div>


</body>

</html>