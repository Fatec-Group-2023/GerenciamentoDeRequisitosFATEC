<?php

if (!empty($_GET['cod_sala'])) {

    include_once("../conexao/conexao.php");

    $cod_sala = $_GET['cod_sala'];

    $sqlSelect = "SELECT * FROM salas WHERE cod_sala=$cod_sala";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {

        $sqlDelete = "DELETE FROM salas WHERE cod_sala=$cod_sala";

        $resultDelete = $conn->query($sqlDelete);
    }
}
header('location:../View/salasMaquinas.php');
