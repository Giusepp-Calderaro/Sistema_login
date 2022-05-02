<?php
    if(isset($_POST['submit'])){
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['senha']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/etilo_cadastro.css">
    <title>Login</title>
</head>
<body>
    
    <section class="conteiner">
<!----------------------------cabecalho principal------------------------>
        <header id="cabecalho">
            <h1>Um único cadastro para todos os produtos Calderaro</h1>
        </header>

<!------------------------------Area do formulário----------------------->
        <div id="box">
            <form action="cadastro.php" method="POST">
                <h2>Cadastro</h2>
                    <input type="text" name="nome" class="caixa" placeholder="Nome completo">
                    <input type="email" name="email" class="caixa" placeholder="Informe um email válido">
                    <input type="email" name="" class="caixa" placeholder="Informe novamente seu Email">
                    <input type="password" name="senha" class="caixa" placeholder="informe uma senha"><br>
                    <input type="submit" name="submit" value="Cadastrar" id="botao">
            </form>
        </div>
    </section>
</body>
</html>