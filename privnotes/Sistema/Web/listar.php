<?php

session_start();

if (empty($_SESSION['usuario'])) {
    echo "<script>alert('Usuário não logado!')</script>";
    echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";
}

$pdo = new PDO("mysql:host=localhost;dbname=exemplo","root","");
$sql = $pdo->prepare("SELECT id, nome, email FROM `usuarios`");
$sql->execute(array());
$info = $sql->fetchAll(PDO::FETCH_ASSOC);



/* echo "<pre>";
print_r($info);
echo "</pre>";
 */

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
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
                <a class="btn btn-outline-dark rounded-3" href="principal.html">Voltar à tela anterior</a>
                <a class="btn btn-dark rounded-3" href="logout.php">Encerrar sessão</a>

            </div>   
        </div>
        
    </nav>

    <div class="container mt-4 text-start">
        <h2 class="fw-bold">Usuários do PrivNotes</h2>
        <p>Confira a lista de todos os usuários do PrivNotes, e aproveite para editar suas informações caso seja necessário!</p>

        <?php
            /* VERIFICA SE EXISTE VALOR NA VAR ERRO E EXIBE NA TELA */
            if (!empty($_SESSION['erro'])) {
                echo $_SESSION['erro'];
                unset($_SESSION['erro']);
            }
        ?>
        
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
            <!-- CRIAR A TABELA DINAMICAMENTE PELO PHP -->
            <?php
                /* CONEXÃO COM O BANCO DE DADOS */
                $pdo = new PDO('mysql:host=localhost;dbname=exemplo','root','');

                /* PREPARAÇÃO PARA REALIZAR UM COMANDO SQL NO BANCO DE DADOS */
                $sql = $pdo->prepare("SELECT id, nome, email FROM `usuarios`");

                /* ENVIO DOS DADOS E GRAVAÇÃO NO BANCO DE DADOS*/
                $sql->execute(array());
                $info = $sql->fetchAll(PDO::FETCH_ASSOC);

               /*  echo "<pre>";
                print_r($info);
                echo "</pre>"; */

                foreach ($info as $key => $value) {

                    echo "<form action='editar.php' method='get'>";
                    echo "<tr>";
                        echo "<th scope='row'>".$info[$key]['id']."</th>";
                        echo "<td>".$info[$key]['nome']."</td>";
                        echo "<td>".$info[$key]['email']."</td>";
                        echo "<td>";
                            echo "<a class='btn btn-outline-dark' href='editar.php?id=".$info[$key]['id']."'>Editar</a>    ";

                            echo "  <a class='btn btn-dark' href='deletar.php?id=".$info[$key]['id']."'>Deletar</a>";    
                        echo "</td>";
                    echo "</tr>";
                    echo "</form>";

                }
            ?>
        
        </tbody>
        </table>
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