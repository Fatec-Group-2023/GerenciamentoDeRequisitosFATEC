<?php

if (!empty($_GET['cod_reserva'])) {

    include_once("../conexao/conexao.php");

    $cod_reserva = $_GET['cod_reserva'];

    $sqlSelect = "SELECT * FROM reservas WHERE cod_reserva=$cod_reserva";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {

        $sqlDelete = "DELETE FROM reservas WHERE cod_reserva=$cod_reserva";

        $resultDelete = $conn->query($sqlDelete);
    }
}
header('location:../View/reservas.php');
