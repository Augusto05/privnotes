<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie sua conta</title>
    <link rel="stylesheet" href="cadastrar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <style>
    a {
        font-family: 'Inter', sans-serif;
    }
    h2 {
        font-family: 'Inter', sans-serif;
    }

    p {
        font-family: 'Inter', sans-serif;
    }
    input {
        font-family: 'Inter', sans-serif;
    }
    select {
        font-family: 'Inter', sans-serif;
    }
    label {
        font-family: 'Inter', sans-serif;
    }

    div {
        font-family: 'Inter', sans-serif;
    }
</style>
</head>
<body id="background">
    <nav class="navbar">
        <div id="nav" class="container-fluid">
            <a class="navbar-brand" href="..\index.php"><img src="..\Recursos/priv2.png" alt="" width="230px"></a>
            
            <div>
                <h5 id="nav" class=""> Seu bloco de notas favorito. Simples, rápido, e seguro.</h5>
                <button id="dark-mode-toggle" class="dark-mode-toggle">
                <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496"><path fill="currentColor" d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z" transform="translate(-8 -8)"/></svg>
                </button>
            </div>
        </div>
        
      
    </nav>
<br>
    <div class="container mt-4 text-start">
        <h2 id="titulo" class="fw-bold">Crie sua conta</h2>
        <p id="sub">Preencha corretamente todos os campos para se cadastrar e desfrutar do PrivNotes!</p>

        <form action="bd.php" method="post">

            <div class="row py-2">
                <div class="col-md-12 ">
                    <input class="form-control rounded-3" type="text" name="nome" id="" placeholder="Nome completo" required>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-10 ">
                    <input class="form-control rounded-3" type="text" name="endereco" id="" placeholder="Endereço" required>
                </div>
                <div class="col-md-2 ">
                    <input class="form-control rounded-3" type="text" name="numero" id="" placeholder="Número" required>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-3 ">
                    <input class="form-control rounded-3" type="text" name="cidade" id="" placeholder="Cidade" required>
                </div>
                <div class="col-md-3 ">
                    <select id="select" class="form-select fw-medium text-secondary rounded-3" type="select" name="estado" id="" placeholder="Estado" required>
                        <option value="NL">Selecione seu Estado</option>    
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="EX">Estrangeiro</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input class="form-control rounded-3" type="number" name="rg" id="" placeholder="RG" required>
                </div>
                <div class="col-md-3 ">
                    <input class="form-control rounded-3" type="number" name="cpf" id="" placeholder="CPF" required>
                </div>
            </div>

            <div class="row py-2">
                <div class="col-md-6">
                    <select id="select"class="form-select text-secondary fw-medium rounded-3" name="sexo" id="" required>
                        <option value="">Selecione o sexo</option>
                        <option value="fem">Feminino</option>
                        <option value="masc">Masculino</option>
                        <option value="indeterminado">Prefiro não dizer</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <input class="form-control text-secondary fw-medium rounded-3" type="date" name="datanasc" id="" required>
                </div>
            </div>
    <br>
    <div class="container mt-4 text-start">
        <h2 id="titulo" class="fw-bold">Dados para seu acesso</h2>
        <p id="sub" >Atenção! Esses são os dados que você sempre utlizará para acessar o website. Trate de não esquecê-los!</p>
            <div id="dados" class="row py-2  rounded-4 mt-0">
                
                <div class="col-md-6 mt-0">
                    <label class="form-label " for="email"></label>
                    <input class="form-control fw-medium rounded-3" type="email" name="email" id="email" placeholder="Digite o e-mail que deseja utilizar" required>
                </div>
                <div class="col-md-6 mt-0">
                    <label class="form-label" for="conf"></label>
                    <input class="form-control fw-medium rounded-3" type="email" placeholder="Confirme seu e-mail" name="conf" id="conf" required>
                </div>
                <div class="col-md-12"> 
                <br> </div>
                <div class="col-md-6">
                    <label class="form-label" for="senha"></label>
                    <input class="form-control fw-medium rounded-3" type="password" name="senha" id="senha" placeholder="Escolha a senha que deseja utilizar" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="confsenha"></label>
                    <input class="form-control fw-medium rounded-3" type="password" name="confsenha" id="confsenha" placeholder="Confirme sua senha" required>
                  <br>  
                </div>
               
                
            </div>

            <div class= "position-relative">
                <input class="btn  btn-dark py-2 mt-4 fw-bold rounded-3 position-absolute top-0 end-0" type="submit" value="Cadastrar Usuário">
            </div>
        </form>
            

        <?php

            if (!empty($_SESSION['ok'])) {
                echo $_SESSION['ok'];
                unset($_SESSION['ok']);
            }

        ?>


    </div>
    <br>
    <br>
    <br>
    <footer class="footer text-center fixed-bottom bg-black py-3 rounded-top">
        <div class="container">
            <p class="text-light">© 2023 PrivNotes, Inc. Todos os direitos reservados.</p>
        </div>

        <div> <a class="btn btn-dark rounded-3" href="..\index.php">Voltar à tela de início</a></div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

<script src= "cadastrar.js"></script>
</html>