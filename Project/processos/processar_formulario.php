<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processa seus dados de formulário aqui
    // ...

    // Configura o cookie para indicar que o formulário foi enviado
    setcookie('formularioEnviado', 'true', strtotime('Fri, 31 Dec 9999 23:59:59 GMT'));

    // Redireciona o administrador de volta ao formulario.html ou a outra página de sua escolha
    header("Location: ../View/formulario.html");
    exit();
}
?>
