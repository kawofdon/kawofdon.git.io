<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/login_cadastro.css">
    <!-- <link rel="stylesheet" href="../css/esqueceu_senha.css"> -->
    
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <title>Index2</title>
</head>
<body>
         

  
        <!-- <header id="myHeader" class="initial">
            <div class="logo-container">
                <img src="../IMG/logo2.jpg" alt="Logo" class="logo">
            </div>
            <div class="header-text">
                <h3 class="text">Ecologic Digital Materials Solutions</h3>
            </div>
              
                    <nav>
                      <a href="#">Home</a>
                      <a href="#">Sobre</a>
                      <a href="#">Localização</a>
                      <a href="#">Perfil</a>
                      <a href="#">Pontos</a>
                      <a href="#">Login/Cadastro</a>
                      <a href="#">FAQ</a>
                    </nav>

        </header> -->
        <header class="header" id="myHeader">
              <div class="logo-container">
                <img src="../IMG/logo2.jpg" alt="Logo" class="logo">
            </div>
            <div class="header-text">
              <h3 class="text">Ecologic Digital Materials Solutions</h3>
          </div>
          <div class="container">
            
            <div class="subcontainer">
      
              <nav class="navbar-container">
      
                <div class="navbar-left">
                  
                  <div class="nav-menu">
                    <br><br><br><br><br><br><br><br>
                    <a href="index.php" class="nav-link">Home</a>
                    <a href="sobre.php" class="nav-link">Sobre Nós</a>
                    <a href="local.php" class="nav-link">Localização</a>
                    <a href="perfil.php" class="nav-link">Perfil</a>
                    <a href="pontos.php" class="nav-link">Pontos</a>
                    <a href="#" class="nav-link" onclick="openModal()">Cadastro/Login</a>
                    <a href="Contato.php" class="nav-link">FAQ</a>
                  </div>
                </div>
                <div class="hamburger">
                  <span class="bar"></span>
                  <span class="bar"></span>
                  <span class="bar"></span>
                </div>
               
      
              </nav>
            </div>
          </div>
        </header>
   
        <div id="header">
            <div class="image-container show">
              <div class="overlay"></div>
              <img src="../IMG/img1.jpg" alt="Imagem 1">
            </div>
            <div class="image-container">
              <div class="overlay"></div>
              <img src="../IMG/img2.jpg" alt="Imagem 2">
            </div>
            <div class="image-container">
              <div class="overlay"></div>
              <img src="../IMG/img3.jpg" alt="Imagem 3">
            </div>
            <!-- Adicione mais imagens conforme necessário -->
     
          
            <div id="message">
                <div class="line-above">
                </div>
                  <p class="e">EDMS</p>
                <h3 id="message-highlighted">DESCARTE CONOSCO: FAÇA SUA PARTE</h3>
               <p class="p1"> Descarte responsável, coleta eficiente e reciclagem de eletrônicos. Contribua para um mundo mais sustentável conosco. Juntos, podemos fazer a diferença.</p>
            </div>
            
                
                <div class="arrow-down">
                  <p>Veja como funciona</p>
                  <div class="seta" > <img src="../IMG/seta-para-baixo.png" alt=""></div>
                 </div>
        </div>
    

                <p class="steps">COMO DESCARTAR COM A EDMS</p>
                <div class="steps-container">
                  <div class="step">
                    <img src="../IMG/do-utilizador.png" alt="Passo 1">
                    <h3>CRIE SUA <br> CONTA EDMS</h3><br>
                    <p>Crie sua conta pelo site<br>ou por uma Retorna Machine.</p>
                  </div>
              
                  <div class="step">
                    <img src="../IMG/automacao.png" alt="Passo 2">
                    <h3>VÁ ATÉ UMA<br>EDMS MACHINE</h3><br>
                    <p>Encontre o local mais <br>próximo de você. Confira todos os dados em tempo real.</p>
                  </div>
              
                  <div class="step">
                    <img src="../IMG/eletronico.png" alt="Passo 3">
                    <h3>DEPOSITE SEU <br>LIXO ELETRÔNICO</h3><br>
                    <p>Deposite o seu lixo eletrônico em uma EDMS Machine.</p>
                  </div>
              
                  <div class="step">
                    <img src="../IMG/podio.png" alt="Passo 4">
                    <h3>ATRIBUA SEUS <br>PONTOS</h3><br>
                    <p>Cada tipo de lixo eletrônico<br> gera pontos. Adicione-os <br> em sua conta EDMS.</p>
                  </div>
              
                  <div class="step">
                    <img src="../IMG/retorna.png" alt="Passo 5">
                    <h3>TROQUE SEUS PONTOS<br>POR BENEFÍCIOS</h3><br>
                    <p>Converta seus pontos<br> em créditos em livraria, <br>celular e muito mais!</p>
                  </div>
              </div>
      
  
        <div class="container-table" style="overflow-x:auto;">
          <table>
  
              <thead id="titulo">
                  <th colspan="2">
                      O que pode ser descartado?
                  </th>
              </thead>
              <thead>
              <tr>
                  <th>Produtos</th>
                  <th>Pontuação</th>
              </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Celulares</td>
                      <td>20 pts</td>
                    </tr>
                  <tr>
                      <td>Notebooks</td>
                      <td>30 pts</td>
                    </tr>
                  <tr>
                      <td>Tablets</td>
                      <td>25 pts</td>
                  </tr>
                  <tr>
                      <td class="tooltip-trigger">Acessorios<span class="tooltip-content">Exemplos: carregadores, capas, fones de ouvido, etc.</span></td>
                      <td>10 pts</td>
                  </tr>
      
              </tbody>
          </table>
      </div>

      <div class="video">
        <video controls>
          <source src="../video/EDMS-MACHINE.mp4" type="video/mp4">
          EDMS MACHINE
        </video>
      </div>



<!--POPUP DE CADASTRO/LOGIN-->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <iframe id="modalIframe" src="" frameborder="0"></iframe>
      <div class="form-l-c">
        <div class="form-container" id="loginForm">
              
            <form name="formulario" action="login.php" method="post" class="form-container-l-c">
                <h3>Login</h3>
                
                <div class="email">
                    <input type="email" class="campo-obrigatorio" name="email" placeholder="Email" autofocus required>
                </div>
                <div class="senha">
                    <input type="password" class="campo-obrigatorio" name="senha" placeholder="Senha" required>
                </div>

                <p id="esqueceu-senha">
                    Esqueceu a Senha?
                    <button type="button"  id="btn-es" onclick="window.location.href='esqueceu_senha.php'"> 
                        Recupere a senha
                    </button>
                </p>
                
                <input type="submit" name="login" value="Logar">

                <p>
                    Não tem Conta?
                    <button type="button" id="btn-ntc" onclick="showCadastroForm()"> 
                        Cadastre-se
                    </button>
                </p>
            </form>
        </div>

        <div class="form-container" id="cadastroForm">
            <form name="formulario" action="cadastro.php" method="post" class="form-container-l-c">
                <h3>Cadastro</h3>
                <div class="name">
                    <input type="text" class="campo-obrigatorio" name="nome" placeholder="Primeiro Nome" autofocus required>
                </div>
                <div class="use-name">
                    <input type="text" class="campo-obrigatorio" name="name_user" placeholder="Nome de usuário" required>
                </div>
                <div class="email">
                    <input type="email" class="campo-obrigatorio" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="cpf">
                    <input type="text" class="campo-obrigatorio" name="cpf" id="cpf" placeholder="CPF" autocomplete="off" onkeyup="mascaraCpf('___.___.___-__',this)" required>
                </div>
                <div class="senha">
                    <input type="password" class="campo-obrigatorio" name="senha" placeholder="Digite uma senha forte" required>
                </div>
                <br><br><br>
                <input type="submit" id="btn-cadastrar" class="campo-obrigatorio" name="cadastrar" value="Cadastre-se">
                <p>
                    Possui Conta?
                    <button type="button" id="btn-tc" onclick="showLoginForm()">
                        Faça Login
                    </button>
                </p>
                
            </form>
        </div>
    </div>
    </div>
</div>
       


<div class="pg-footer">
        <footer class="footer">
          <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
            <path class="footer-wave-path" d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z"></path>
          </svg>
          <div class="footer-content">
            <div class="footer-content-column">
              <div class="footer-logo">
                <a class="footer-logo-link" href="#">
                  <span class="hidden-link-text">LOGO</span>
                  <img src="../img/logo.png" alt="Logo EDMS" class="logo-footer">
                  <img src="../img/logo_nexus-sf.png" alt="Logo NexusTech" class="logo-footer">
                </a>
              </div>
        
            </div>
            <div class="footer-content-column">
                <div class="footer-menu">
                    <h2 class="footer-menu-name">Empresa</h2>
                    <ul id="menu-company" class="footer-menu-list">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Contato</a>
                        </li>
                        <!-- <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                            <a href="#">Notícias</a>
                        </li> -->
                        <!-- <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Carreiras</a>
                        </li> -->
                    </ul>
                </div>
                <div class="footer-menu">
                    <h2 class="footer-menu-name">Legal</h2>
                    <ul id="menu-legal" class="footer-menu-list">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-170434">
                            <a href="#">Aviso de Privacidade</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Termos de Uso</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-content-column">
                <div class="footer-menu">
                    <h2 class="footer-menu-name">Links Rápidos</h2>
                    <ul id="menu-quick-links" class="footer-menu-list">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom">
                            <a target="_blank" rel="noopener noreferrer" href="#">Centro de Suporte</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom">
                            <a target="_blank" rel="noopener noreferrer" href="#">Status do Serviço</a>
                        </li>
                        <!-- <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Segurança</a>
                        </li> -->
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Instagram</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type_archive menu-item-object-customer">
                            <a href="#">Clientes</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Avaliações</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-content-column">
                <div class="footer-call-to-action">
                    <h2 class="footer-call-to-action-title">Vamos Conversar</h2>
                    <p class="footer-call-to-action-description">Tem uma pergunta de suporte?</p>
                    <a class="footer-call-to-action-button button" href="contato.php" target="_self">Entre em Contato</a>
                </div>
                <div class="footer-call-to-action">
                    <h2 class="footer-call-to-action-title">Você Pode Nos Chamar</h2>
                    <p class="footer-call-to-action-link-wrapper">
                        <a class="footer-call-to-action-link" href="tel:0124-64XXXX" target="_self">0124-64XXXX</a>
                    </p>
                </div>
            </div>
            <div class="footer-social-links"> <svg class="footer-social-amoeba-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236 54">
                <path class="footer-social-amoeba-path" d="M223.06,43.32c-.77-7.2,1.87-28.47-20-32.53C187.78,8,180.41,18,178.32,20.7s-5.63,10.1-4.07,16.7-.13,15.23-4.06,15.91-8.75-2.9-6.89-7S167.41,36,167.15,33a18.93,18.93,0,0,0-2.64-8.53c-3.44-5.5-8-11.19-19.12-11.19a21.64,21.64,0,0,0-18.31,9.18c-2.08,2.7-5.66,9.6-4.07,16.69s.64,14.32-6.11,13.9S108.35,46.5,112,36.54s-1.89-21.24-4-23.94S96.34,0,85.23,0,57.46,8.84,56.49,24.56s6.92,20.79,7,24.59c.07,2.75-6.43,4.16-12.92,2.38s-4-10.75-3.46-12.38c1.85-6.6-2-14-4.08-16.69a21.62,21.62,0,0,0-18.3-9.18C13.62,13.28,9.06,19,5.62,24.47A18.81,18.81,0,0,0,3,33a21.85,21.85,0,0,0,1.58,9.08,16.58,16.58,0,0,1,1.06,5A6.75,6.75,0,0,1,0,54H236C235.47,54,223.83,50.52,223.06,43.32Z"></path>
              </svg>
              <a class="footer-social-link linkedin" href="#" target="_blank">
                <span class="hidden-link-text">Linkedin</span>
                <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 30 30">
                  <path class="footer-social-icon-path" d="M9,25H4V10h5V25z M6.501,8C5.118,8,4,6.879,4,5.499S5.12,3,6.501,3C7.879,3,9,4.121,9,5.499C9,6.879,7.879,8,6.501,8z M27,25h-4.807v-7.3c0-1.741-0.033-3.98-2.499-3.98c-2.503,0-2.888,1.896-2.888,3.854V25H12V9.989h4.614v2.051h0.065 c0.642-1.18,2.211-2.424,4.551-2.424c4.87,0,5.77,3.109,5.77,7.151C27,16.767,27,25,27,25z"></path>
                </svg>
              </a>
              <a class="footer-social-link twitter" href="#" target="_blank">
                <span class="hidden-link-text">Twitter</span>
                <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                  <path class="footer-social-icon-path" d="M 25.855469 5.574219 C 24.914063 5.992188 23.902344 6.273438 22.839844 6.402344 C 23.921875 5.75 24.757813 4.722656 25.148438 3.496094 C 24.132813 4.097656 23.007813 4.535156 21.8125 4.769531 C 20.855469 3.75 19.492188 3.113281 17.980469 3.113281 C 15.082031 3.113281 12.730469 5.464844 12.730469 8.363281 C 12.730469 8.773438 12.777344 9.175781 12.867188 9.558594 C 8.503906 9.339844 4.636719 7.246094 2.046875 4.070313 C 1.59375 4.847656 1.335938 5.75 1.335938 6.714844 C 1.335938 8.535156 2.261719 10.140625 3.671875 11.082031 C 2.808594 11.054688 2 10.820313 1.292969 10.425781 C 1.292969 10.449219 1.292969 10.46875 1.292969 10.492188 C 1.292969 13.035156 3.101563 15.15625 5.503906 15.640625 C 5.0625 15.761719 4.601563 15.824219 4.121094 15.824219 C 3.78125 15.824219 3.453125 15.792969 3.132813 15.730469 C 3.800781 17.8125 5.738281 19.335938 8.035156 19.375 C 6.242188 20.785156 3.976563 21.621094 1.515625 21.621094 C 1.089844 21.621094 0.675781 21.597656 0.265625 21.550781 C 2.585938 23.039063 5.347656 23.90625 8.3125 23.90625 C 17.96875 23.90625 23.25 15.90625 23.25 8.972656 C 23.25 8.742188 23.246094 8.515625 23.234375 8.289063 C 24.261719 7.554688 25.152344 6.628906 25.855469 5.574219 "></path>
                </svg>
              </a>
              <a class="footer-social-link youtube" href="#" target="_blank">
                <span class="hidden-link-text">Youtube</span>
                <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                  <path class="footer-social-icon-path" d="M 15 4 C 10.814 4 5.3808594 5.0488281 5.3808594 5.0488281 L 5.3671875 5.0644531 C 3.4606632 5.3693645 2 7.0076245 2 9 L 2 15 L 2 15.001953 L 2 21 L 2 21.001953 A 4 4 0 0 0 5.3769531 24.945312 L 5.3808594 24.951172 C 5.3808594 24.951172 10.814 26.001953 15 26.001953 C 19.186 26.001953 24.619141 24.951172 24.619141 24.951172 L 24.621094 24.949219 A 4 4 0 0 0 28 21.001953 L 28 21 L 28 15.001953 L 28 15 L 28 9 A 4 4 0 0 0 24.623047 5.0546875 L 24.619141 5.0488281 C 24.619141 5.0488281 19.186 4 15 4 z M 12 10.398438 L 20 15 L 12 19.601562 L 12 10.398438 z"></path>
                </svg>
              </a>
              <a class="footer-social-link github" href="#" target="_blank">
                <span class="hidden-link-text">Github</span>
                <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                  <path class="footer-social-icon-path" d="M 16 4 C 9.371094 4 4 9.371094 4 16 C 4 21.300781 7.4375 25.800781 12.207031 27.386719 C 12.808594 27.496094 13.027344 27.128906 13.027344 26.808594 C 13.027344 26.523438 13.015625 25.769531 13.011719 24.769531 C 9.671875 25.492188 8.96875 23.160156 8.96875 23.160156 C 8.421875 21.773438 7.636719 21.402344 7.636719 21.402344 C 6.546875 20.660156 7.71875 20.675781 7.71875 20.675781 C 8.921875 20.761719 9.554688 21.910156 9.554688 21.910156 C 10.625 23.746094 12.363281 23.214844 13.046875 22.910156 C 13.15625 22.132813 13.46875 21.605469 13.808594 21.304688 C 11.144531 21.003906 8.34375 19.972656 8.34375 15.375 C 8.34375 14.0625 8.8125 12.992188 9.578125 12.152344 C 9.457031 11.851563 9.042969 10.628906 9.695313 8.976563 C 9.695313 8.976563 10.703125 8.65625 12.996094 10.207031 C 13.953125 9.941406 14.980469 9.808594 16 9.804688 C 17.019531 9.808594 18.046875 9.941406 19.003906 10.207031 C 21.296875 8.65625 22.300781 8.976563 22.300781 8.976563 C 22.957031 10.628906 22.546875 11.851563 22.421875 12.152344 C 23.191406 12.992188 23.652344 14.0625 23.652344 15.375 C 23.652344 19.984375 20.847656 20.996094 18.175781 21.296875 C 18.605469 21.664063 18.988281 22.398438 18.988281 23.515625 C 18.988281 25.121094 18.976563 26.414063 18.976563 26.808594 C 18.976563 27.128906 19.191406 27.503906 19.800781 27.386719 C 24.566406 25.796875 28 21.300781 28 16 C 28 9.371094 22.628906 4 16 4 Z "></path>
                </svg>
              </a>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="footer-copyright-wrapper">
              <p class="footer-copyright-text">
                <a class="footer-copyright-link" href="#" target="_self"> ©2020. | Designed By: NexusTech. | All rights reserved. </a>
              </p>
            </div>
          </div>
        </footer>
      </div>
<!-- <div class="footer-bottom">
    <p>copyright &copy;2023. Nexustech designed by <span>Developers</span></p>
</div> -->
</body>
<script src="../JS/index.js"></script>
<script src="../js/login-cadastro.js"></script>
</html>