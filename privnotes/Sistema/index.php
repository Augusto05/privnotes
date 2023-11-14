<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="..\darkmode/darkmode.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
    h2 {
        font-family: 'Inter', sans-serif;
    }
    h5 {
        font-family: 'Inter', sans-serif; 
    }
    input {
        font-family: 'Inter', sans-serif;
    }
    a {
        font-family: 'Inter', sans-serif;       
    }

   div {
        font-family: 'Inter', sans-serif;  
   }
</style>

</head> 
<body id="background">
      <button id="dark-mode-toggle" class="dark-mode-toggle">
        <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496"><path fill="currentColor" d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z" transform="translate(-8 -8)"/></svg>
      </button>

      
<br>
<br>
<br>
<br>

    <div class="container text-center">
        <div class="mt-5 mb-3">
            <img id="logo" src="Recursos\priv2.png" alt="" width="500px">
        </div>
        <br>
        <br>
        <br>
        <div >
            <h2 id="titulo">Faça seu login.</h2>

            <?php

                if (!empty($_SESSION['ok'])) {
                    echo $_SESSION['ok'];
                    unset($_SESSION['ok']);
                }

            ?>
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
        
            </div>
            <div class="col">
                <form action="Web/login.php" method="post">
                    <label class="form-label " for="usuario"></label>
                    <input class="form-control rounded-3" type="email" placeholder="Usuário" name="user" id="usuario" required>
                        
                    <label class="form-label text-light" for="pass"></label>
                    <input class="form-control mb-3 rounded-3" type="password" placeholder="Senha" name="senha" id="pass" required>

                    <a id="conta"class="btn btn-outline-dark rounded-3 mt-2 mb-1" href="Web/cadastrar.php">Crie sua conta</a>
                    <input class="btn btn-primary btn-dark rounded-3 mt-2 mb-1" type="submit" value="Entrar">
                    

                </form>
            </div>
            <div class="col">
    
            </div>
        </div>
        </div>
            
        </div>

       
    </div>
    <br>
    <br>
    <br>
    <h5 id="sub" class="text-center fw-medium">Seu bloco de notas favorito. Simples, rápido e seguro.</h5>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src= "..\darkmode/darkmode.js"></script>
</body>
</html>