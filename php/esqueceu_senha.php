<?php

    session_start();
    ob_start();
    include("conexão.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require '../lib/vendor/autoload.php';
    $mail  = new PHPMailer(true);

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $mensagens_php = '';

    if(!empty($dados['recuperar'])){ //Se o usuário clicou no botão
        // var_dump($dados);

        $query_usuario = "SELECT id_user, primeiro_nome, email
                        FROM perfil
                        WHERE email =:email
                        LIMIT 1";
        $result_usuario = $mysqli->prepare($query_usuario);
        $result_usuario->bindParam(':email',$dados['email'], PDO::PARAM_STR);
        $result_usuario->execute();

        if(($result_usuario) AND ($result_usuario->rowCount() != 0)){
            $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
            $chave_rec_senha = password_hash($row_usuario['id_user'], PASSWORD_DEFAULT);
            //echo "Chave $chave_rec_senha <br>";
            $query_up_usuario = "UPDATE perfil
                                SET recuperar_senha = :recuperar_senha
                                WHERE id_user = :id_user
                                LIMIT 1";
            $result_up_usuario = $mysqli->prepare($query_up_usuario);
            $result_up_usuario->bindParam(':recuperar_senha',  $chave_rec_senha, PDO::PARAM_STR);
            $result_up_usuario->bindParam(':id_user', $row_usuario['id_user'], PDO::PARAM_INT);

            if($result_up_usuario->execute()){
                $link = "http://127.0.0.1/Evelyn/EDMS%20-%20SemiCompleto(atualiza%C3%A7%C3%A3o_login_cadastro)/php/atualizar_senha.php?chave=$chave_rec_senha";
                
                try{
                    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'e55e40d1e24e3c';                     //SMTP username
                    $mail->Password   = 'f3b05b59a218f8';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                    $mail->Port       = 2525;   
                    $mail->CharSet = 'UTF-8';
                    $mail->Encoding = 'base64'; // Pode ajustar conforme necessário

                    //Recipients
                    $mail->setFrom('edmsoficial.empresa@gmail.com', 'Atendimento');
                    $mail->addAddress($row_usuario['email'], $row_usuario['primeiro_nome']);     //Add a recipient
                  
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Recuperação de senha';
                    $mail->Body    = 'Prezado(a)'. $row_usuario['primeiro_nome'] ."Você solicitou alteração
                    de senha.<br><br>Para continuar o processo de recuperação de sua senha, clique
                    no link abaixo ou cole o endereço no seu navegador: <br><br>" . $link . 
                    "<br><br>Se você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá
                    a mesma até que você ative esse código.<br><br>";
                    $mail->AltBody = 'Prezado(a)'. $row_usuario['primeiro_nome'] ."\n\nVocê solicitou alteração
                    de senha.\n\nPara continuar o processo de recuperação de sua senha, clique
                    no link abaixo ou cole o endereço no seu navegador: \n\n". $link .
                    "\n\nSe você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá
                    a mesma até que você ative esse código.\n\n";

                    $mail->send();

                    

                    $mensagens_php = "<div class='sucesso-message1'> <p style='color= green'>Foi enviado um e-mail com instruções
                    para recuperar a senha. Acessa a caixa de e-mail para recuperar a
                    senha!</p> </div>";
                    // header("location: login.php");
                    echo "
                            
                            <div class='voltar'>
                                <img src='../img/logo2.jpg'>
                                <p> <a href='./index.php'> Voltar para a página inicial </a></p>
                            </div>";


                }
                catch (Exception $e) {
                    $mensagens_php = "<div class='error-message'> E-mail não enviado </div>";
                }
            }
            else{
                $mensagens_php =  "<div class='error-message'> <p style='color: #ff0000'> ERRO: Tente novamente </p> </div>";
            }
        }
        else{
            $mensagens_php = "<div class='error-message'><p> ERRO: E-mail inválido </p> </div>";
        }

        if(isset($_SESSION['msg'])){ 
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);

        }
    }
    
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/esqueceu_senha.css">
    <title>Esqueceu a senha</title>
</head>
<body>

   
    <?php echo $mensagens_php?>
   
        
   
    
    <div class="fundo">
    
        <div class="form-l-c">
            <form action="" method="POST">
                <h3>
                    Recuperação de senha
                </h3>
                <input type="email" name="email" placeholder="Digite o seu email"
                    value="<?php if(isset($dados[$dados])){ 
                                echo $dados['email'];
                            }?>"
                >
                <br>
                <input type="submit" name="recuperar" value="Recuperar">

                <p>
                    Lembrou de sua senha? <a href="login.php">Faça login</a>
                </p>
            </form>
        </div>
    </div>
     
    
</body>
</html>