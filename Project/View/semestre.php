<?php
session_start();
include_once("../conexao/conexao.php");

$sql = "SELECT * FROM semestres ORDER BY cod_semestre DESC";

$result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/semestre.css">
    <title>Semestre</title>
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


    <div class="botaoAdd">
        <button onclick="window.location.href = 'adicionarsemestre.php';">+</button>
    </div>
    <h1 class="titulo_semestre">Semestre:</h1>
    <div class="table-container">
        <table class="table text-white table-bg">
            <colgroup>
                <col style="width: 25%;">
                <col style="width: 25%;">
                <col style="width: 25%;">
                <col style="width: 25%;">
            </colgroup>
            <thead>
                <tr>
                    <th colspan="1">Nome</th>
                    <th colspan="1">Ano</th>
                    <th colspan="1">Situação</th>
                    <th colspan="1">...</th>
                </tr>
            </thead>
            <tbody>
                <?php


                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";

                    echo "<td>" . $user_data['nome'] . "</td>";

                    echo "<td>" . $user_data['ano'] . "</td>";

                    echo "<td>";
                    if ($user_data['situacao'] == 'ligado') {
                        echo "<button class='btn btn-sm btn-success' onclick='alternarEstado(this)'>Enviado</button>";
                    } else {
                        echo "<button class='btn btn-sm btn-danger' onclick='alternarEstado(this)'>Não Enviado</button>";
                    }
                    echo "</td>";


                    echo "<td> 
                    <a class='btn btn-sm btn-primary' href='../Funções/editsemestres.php?cod_semestre=$user_data[cod_semestre]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                    </svg>
                    </a>  
                    <a class='btn btn-sm btn-danger' href='../Funções/deletesemestre.php?cod_semestre=$user_data[cod_semestre]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                    <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
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
        function alternarEstado(botao) {
            if (botao.classList.contains('btn-success')) {
                botao.classList.remove('btn-success');
                botao.classList.add('btn-danger');
                botao.textContent = 'Não enviado';
            } else {
                botao.classList.remove('btn-danger');
                botao.classList.add('btn-success');
                botao.textContent = 'Enviado';
            }
        }
    </script>
    </div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>