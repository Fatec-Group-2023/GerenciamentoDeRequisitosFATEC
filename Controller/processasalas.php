<?php

include_once("../conexao/conexao.php");

$sala = filter_input(INPUT_POST, 'sala', FILTER_SANITIZE_STRING);
$maquina = filter_input(INPUT_POST, 'maquina', FILTER_SANITIZE_STRING);


$result_salas = "INSERT INTO salas(salas,maquinas) VALUES('$sala','$maquina')";
$resultado_salas=mysqli_query($conn,$result_salas);

header('location:../View/salasMaquinas.php');