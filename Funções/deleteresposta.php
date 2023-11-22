<?php

if (!empty($_GET['cod_resposta'])) {

    include_once("../conexao/conexao.php");

    $cod_resposta = $_GET['cod_resposta'];

    $sqlSelect = "SELECT * FROM resposta_formulario WHERE cod_resposta=$cod_resposta";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {

        $sqlDelete = "DELETE FROM resposta_formulario WHERE cod_resposta=$cod_resposta";

        $resultDelete = $conn->query($sqlDelete);
    }
}
header('location:../View/ver_respostas.php');
