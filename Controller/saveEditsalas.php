<?php
include_once("../conexao/conexao.php");

  if(isset($_POST['update']))
  {
    $cod_sala=$_POST['cod_sala'];
    $sala = $_POST['sala'];
    $maquina = $_POST['maquina'];

    $sqlUpdate="UPDATE salas SET salas='$sala',maquinas='$maquina' WHERE cod_sala='$cod_sala'";

    $result=$conn->query($sqlUpdate);


  }
  header('location:../View/salasMaquinas.php');

