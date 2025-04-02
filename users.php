<?php

    require_once 'classes/User.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $user = new User();

        $user->adicionarUsuario(
        $_POST['nome'], 
        $_POST['cpf'], 
        $_POST['telefone'] , 
        $_POST['email'] , 
        $_POST['musica']    
    
    );
        
        echo "Usuário Cadastrado";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/style.css">

</head>



<body>

<header>
        <nav>
            <ul class="menu">
                <li><a href="index.php">Início</a></li>
                <li><a href="compras.php">Cadastrar Compras</a></li>
                <li><a href="ativos.php">Preço Médio</a></li>
                <li><a href="dividendos.php">Cadastrar Dividendos</a></li>
                <li><a href="relatorio.php">Relatório</a></li>
                <li><a href="users.php">Meu Usuário</a></li>
            </ul>
        </nav>
    </header>





<form method="POST">

<label for="ativo">Nome Completo:</label>
<input type="text" name="nome" id="nome" required>
<br>
<label for="valor">CPF:</label>
<input type="text" name="cpf" id="cpf" required>
<br>
<label for="telefone">Telefone:</label>
<input type="text" name="telefone" id="telefone" required>
<br>
<label for="email">E-mail:</label>
<input type="email" name="email" id="email" required>
<br>
<label for="musica">Musica Favorita:</label>
<input type="text" name="musica" id="musica" required>
<br>
<button type="submit">Cadastrar</button>
</form>



<footer>
        <p>Lembre-se, se sua musica favorida não for Rock voce ta fudido</p>
    </footer>

</body>
</html>