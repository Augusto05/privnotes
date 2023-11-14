<?php


    session_start();

    if (empty($_SESSION['usuario'])) {
        echo "<script>alert('Usuário não logado!')</script>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";
    }
    
    $pdo = new PDO("mysql:host=localhost;dbname=exemplo","root","");
    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE id=?");
    $sql->execute(array($_GET['id']));
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);



    if ($info[0]['email'] != $_SESSION['usuario']) {
       
        $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'>Ops, parece que você não pode alterar essas informações!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=listar.php'/>";
        exit();

    } 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Informações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        div {
            font-family: 'Inter', sans-serif; 
        }
    </style>
</head>
<body>

<nav class="navbar bg-white border-bottom border-body">
        <div class="container-fluid">
            <a class="navbar-brand" href="..\index.php"><img src="..\Recursos/priv2.png" alt="" width="230px"> </a>  
           
            <div class="justify-content-end">
                <a class="btn btn-outline-dark rounded-3" href="listar.php">Voltar à tela anterior</a>
                <a class="btn btn-dark rounded-3" href="logout.php">Encerrar sessão</a>

            </div>   
        </div>
        
    </nav>

    <div class="container text-start mt-3">
        <h2 class="fw-bold">Atualizar Informações</h2>
        <p>
            Altere suas informações de cadastro do PrivNotes. Não esqueça de salvar suas alterações!
        </p>
        <?php
         
        ?>
       <!-- <form action="updatecad.php" method="post">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <input class="form-control rounded-3" type="text" name="id" id="" placeholder="ID" 
                        value="<?php
                                if (isset($info)) {
                                    echo $info[0]['id'];
                                }
                            ?>">
                </div>
            </div>

                            -->
            <div class="row">
                <div class="col-md-12">
                    <label class="fw-bold mb-2" for="nome">Nome completo</label>
                    <input class="form-control rounded-3" type="text" name="nome" id="" placeholder="Primeiro nome" 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['nome'];
                            }
                        ?>" required>
                </div>
              
            </div>

            <div class="row mt-3">
                <div class="col-md-10">
                <label class="fw-bold mb-2" for="end">Endereço</label>
                    <input class="form-control rounded-3" type="text" name="end" id="" placeholder="Endereço" 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['endereco'];
                            }
                        ?>"
                    required>
                </div>
                <div class="col-md-2">
                <label class="fw-bold mb-2" for="num">Número</label>
                    <input class="form-control rounded-3" type="number" name="num" id="" placeholder="Número" 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['numero'];
                            }
                        ?>"
                    required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                <label class="fw-bold mb-2" for="cidade">Cidade</label>
                    <input class="form-control rounded-3" type="text" name="cidade" id="" placeholder="Cidade" 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['cidade'];
                            }
                        ?>"
                    required>
                </div>

                <div class="col-md-6">
                <label class="fw-bold mb-2" for="estado">Estado</label>
                    <input class="form-control rounded-3" type="text" name="estado" id="" placeholder="Estado" 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['estado'];
                            }
                        ?>"
                    required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-3">
                <label class="fw-bold mb-2" for="select">Sexo</label>
                    <select class="form-control rounded-3" name="sexo" id="" required>
                        <option <?php if ($info[0]['sexo'] == "Selecione") echo "selected"; ?>>Selecione</option>
                        <option <?php if ($info[0]['sexo'] == "fem") echo "selected"; ?>>Feminino</option>
                        <option <?php if ($info[0]['sexo'] == "masc") echo "selected"; ?>>Masculino</option>
                        <option <?php if ($info[0]['sexo'] == "indeterminado") echo "selected"; ?>>Prefiro não dizer</option>
                        
                    </select>
                </div>
               
                <div class="col-md-3">
                <label class="fw-bold mb-2" for="rg">RG</label>
                    <input class="form-control rounded-3" type="number" name="rg" id="" placeholder="RG" 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['rg'];
                            }
                        ?>"
                    required>
                </div>
            
                <div class="col-md-3">
                <label class="fw-bold mb-2" for="cpf">CPF</label>
                    <input class="form-control rounded-3" type="number" name="cpf" id="" placeholder="CPF" 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['cpf'];
                            }
                        ?>"
                    required>
                </div>
            
                <div class="col-md-3">
                <label class="fw-bold mb-2" for="datanasc">Data de nascimento</label>
                    <input class="form-control rounded-3" type="date" name="datanasc" id="" placeholder="Data de nascimento" 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['data'];
                            }
                        ?>"
                    required>
                </div>
                <h2 class="fw-bold container mt-4 text-start">Dados para seu acesso</h2>
        <p>Atenção! Esses são os dados que você sempre utlizará para acessar o website. Trate de não esquecê-los!</p>

            </div>

            
       
            <div class="row mt-3">
                <div class="col-md-6">
                <label class="fw-bold mb-2" for="email">E-mail</label>
                    <input class="form-control rounded-3" type="email" name="email" id="" placeholder="Digite seu e-mail de usuário..." 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['email'];
                            }
                        ?>"
                    required>
                </div>
                
                <div class="col-md-6">
                <label class="fw-bold mb-2" for="emailconf">Confirme seu e-mail</label>
                    <input class="form-control rounded-3" type="email" name="emailconf" id="" placeholder="Confirme seu e-mail de usuário..." 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['email'];
                            }
                        ?>"
                    required>
                </div>


            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                <label class="fw-bold mb-2" for="password">Escolha sua nova senha</label>
                    <input class="form-control rounded-3" type="password" name="senha" id="" placeholder="Digite sua senha..." required>
                </div>
                <div class="col-md-6">
                <label class="fw-bold mb-2" for="password">Confirme sua nova senha</label>
                    <input class="form-control rounded-3" type="password" name="senhaconf" id="" placeholder="Confirme sua senha..." required>
                </div>

            </div>

          
            <a class="btn btn-outline-dark mt-3" href="principal.html">Cancelar</a>
            <input class="btn btn-dark mt-3" name="atualizar" type="submit" value="Atualizar Informações">
            
        </form>

        <br><br><br><br>
    </div>

    <footer class="footer text-center fixed-bottom bg-black py-3 rounded-top">
        <div class="container">
            <p class="text-light">© 2023 PrivNotes, Inc. Todos os direitos reservados.</p>
        </div>

        <div> <a class="btn btn-dark rounded-3" href="..\index.php">Voltar à tela de início</a></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>