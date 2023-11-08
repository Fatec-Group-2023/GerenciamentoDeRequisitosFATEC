<?php

include_once("../conexao/conexao.php");

$nome_resposta = filter_input(INPUT_POST, '', FILTER_SANITIZE_STRING);
$disciplina_resposta = filter_input(INPUT_POST, 'disciplina', FILTER_SANITIZE_STRING);
$turma_resposta = filter_input(INPUT_POST, 'turma', FILTER_SANITIZE_STRING);
$quantidade_resposta = filter_input(INPUT_POST, 'quantidadedalunos', FILTER_SANITIZE_STRING);
$software_resposta = filter_input(INPUT_POST, 'softwares', FILTER_SANITIZE_STRING);


$result_resposta = "INSERT INTO resposta_formulario(nome_resposta,disciplina_resposta,turma_resposta,quantidade_resposta,software_resposta) VALUES('$nome_resposta','$disciplina_resposta','$turma_resposta','$quantidade_resposta','$software_resposta')";
$resultado_respota=mysqli_query($conn,$result_resposta);

header('location:../View/Professores/formulario.php');