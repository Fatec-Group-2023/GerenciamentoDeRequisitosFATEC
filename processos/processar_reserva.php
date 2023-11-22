<?php

include_once("../conexao/conexao.php");

$nome_reserva = filter_input(INPUT_POST, '', FILTER_SANITIZE_STRING);
$disciplina_reserva = filter_input(INPUT_POST, 'disciplina', FILTER_SANITIZE_STRING);
$turma_reserva = filter_input(INPUT_POST, 'turma', FILTER_SANITIZE_STRING);
$quantidade_reserva = filter_input(INPUT_POST, 'quantidadedalunos', FILTER_SANITIZE_STRING);
$software_reserva = filter_input(INPUT_POST, 'softwares', FILTER_SANITIZE_STRING);
$dias_reserva = filter_input(INPUT_POST, 'diasSemana', FILTER_SANITIZE_STRING);
$hora_inicial = filter_input(INPUT_POST, 'horainicial', FILTER_SANITIZE_STRING);
$hora_final = filter_input(INPUT_POST, 'horafinal', FILTER_SANITIZE_STRING);
$sala_reserva = filter_input(INPUT_POST, 'sala', FILTER_SANITIZE_STRING);
$qtd_maquina_reserva = filter_input(INPUT_POST, 'quantidademaquinas', FILTER_SANITIZE_STRING);

$result_reserva = "INSERT INTO reservas (nome_reserva,disciplina_reserva,turma_reserva,quantidade_reserva,software_reserva,dias_reserva,inicio_reserva,fim_reserva,sala_reserva,qtd_maquina_reserva) VALUES('$nome_reserva','$disciplina_reserva','$turma_reserva','$quantidade_reserva','$software_reserva','$dias_reserva','$hora_inicial','$hora_final','$sala_reserva','$qtd_maquina_reserva')";
$resultado_respota=mysqli_query($conn,$result_reserva);

header('location:../Funções/editreserva.php');