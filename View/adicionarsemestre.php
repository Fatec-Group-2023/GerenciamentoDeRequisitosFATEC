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
    <link rel="stylesheet" type="text/css" href="../css/addSemestre.css">
    <title>Adicionar Semestre</title>
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


    <div class="retangulo-fundo">

        <form method="POST" action="../processos/processasemestre.php">

            <input type="text" class="semestre-input" name="nome" placeholder="Informe o semestre escolhido" />

            <select id="ano" name="ano" class="ano-input">
                <?php
                $anoAtual = date("Y");
                for ($ano = 1900; $ano <= $anoAtual; $ano++) {
                    echo "<option value='$ano'>$ano</option>";
                }
                ?>
            </select>
            <button class="botao" type="submit">Adicionar</button>




        </form>

    </div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>