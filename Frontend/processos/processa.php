<?php

include_once("../conexao/conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
/*
echo "Nome: $nome";
echo "Sobreome: $sobrenome";
echo "Email: $email";
echo "Senha: $senha";
*/

$result_usuario = "INSERT INTO usuarios(nome,email,senha) VALUES('$nome','$email','$senha')";
$resultado_usuario=mysqli_query($conn,$result_usuario);

header('location:../View/login.php');