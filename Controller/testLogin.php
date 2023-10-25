<?php

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once("../conexao/conexao.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifique se as credenciais de administrador são fornecidas
    if ($email === 'administrador@hotmail.com' && $senha === 'admin123') {
        header('Location: ../View/menu.html');
        exit();
    }

    // Se não for admin, verifique o banco de dados para usuários regulares
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        header('Location: ../View/Professores/menu.php');
        exit();
    } else {
        header('Location: ../View/login.php');
        exit();
    }
}
?>
