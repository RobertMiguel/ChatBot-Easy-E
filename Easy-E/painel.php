<?php
include('protect.php');
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
    <link rel="stylesheet" href="./painel-style.css">
</head>
<body>
    <div class="area-messeger">
        <div class="messeger">
            <p>Seja bem-vindo ao painel, <?php echo $_SESSION['nome']; ?></p>
            <button class="botton">
                <a href="logout.php">Sair</a>
            </button>
    </div>
</body>
</html>