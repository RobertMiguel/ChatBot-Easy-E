<?php
include("conexao.php");
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$sql = "insert into usuarios (nome,senha,email) values ('$nome','$email','$senha')";
$salvar = mysqli_query($mysqli,$sql);
$mysqli_close($mysqli);
