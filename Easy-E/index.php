<?php
include('conexao.php.php');
if(isset($_POST['nome']) || isset($_POST['senha'])){
    if(strlen($_POST['nome']) == 0){
        echo "Prencha seu nome";
    }
    else if(strlen($_POST['senha']) == 0){
        echo "Prencha sua senha";
    }
} else {

    $nome = $mysqli->real_escape_string($_POST['nome']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {
        
        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: painel.php");

    } else {
        echo "Falha ao logar! E-mail ou senha incorretos";
    }


    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eazy-E | Login</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="./style-login.css">
</head>
<body>
    <section class="area-login">
        <div class="login">
            <div>
                <img src="./logo.png">
            </div>
            <form method="POST">
                <input type="text" name="nome" placeholder="Digite o nome" autofocus>
                <input type="password" name="senha" placeholder="Digite a Password">
                <input type="submit" value="Entrar">
            </form>
            <p>Ainda não tem cadastro?</p><a href="#">Criar conta</a>
        </div>
    </section>
</body>
</html>