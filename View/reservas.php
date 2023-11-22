<?php
session_start();
include_once("../conexao/conexao.php");

$sql = "SELECT * FROM reservas ORDER BY cod_reserva DESC";

$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/verResposta.css">
    <title>Reservas</title>
</head>

<body>


    <header>
        <nav>
            <img src="../img/l.png" alt="Logo">
            <hr>
            <a href="#">
                <h3>Sobre</h3>
            </a>
        </nav>
    </header>

    <button onclick="goBack()" class="btn">Voltar</button>


    <div class="retangulo-fundo">
        <div class="container">
            <h1>Reservas</h1>

            <table class="table text-white table-bg">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Disciplina</th>
                        <th scope="col">Turma</th>
                        <th scope="col">Quantidade Alunos</th>
                        <th scope="col">Software</th>
                        <th scope="col">Dia Semana</th>
                        <th scope="col">Hora Inicio</th>
                        <th scope="col">Hora Fim</th>
                        <th scope="col">Local</th>
                        <th scope="col">Quantidade Maquinas</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['nome_reserva'] . "</td>";
                        echo "<td>" . $user_data['disciplina_reserva'] . "</td>";
                        echo "<td>" . $user_data['turma_reserva'] . "</td>";
                        echo "<td>" . $user_data['quantidade_reserva'] . "</td>";
                        echo "<td>" . $user_data['software_reserva'] . "</td>";
                        echo "<td>" . $user_data['dias_reserva'] . "</td>";
                        echo "<td>" . $user_data['inicio_reserva'] . "</td>";
                        echo "<td>" . $user_data['fim_reserva'] . "</td>";
                        echo "<td>" . $user_data['sala_reserva'] . "</td>";
                        echo "<td>" . $user_data['qtd_maquina_reserva'] . "</td>";
                        echo "<td> 
                                    <a class='btn btn-sm btn-danger' href='../Funções/deletereserva.php?cod_reserva=$user_data[cod_reserva]'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a.5.5 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                                        </svg>
                                    </a>    
                                </td>";
                        echo "<tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>


        <script>
            function goBack() {
                window.history.back();
            }
        </script>


</body>

</html>