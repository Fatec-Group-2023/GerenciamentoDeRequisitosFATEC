<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/menu.css">
    <title>Menu</title>
    <style>
        /* Remove as bordas e linhas do grid Bootstrap */
        .no-border {
            border: none;
        }

        /* Ajuste o espaçamento interno dos elementos */
        .custom-padding {
            padding: 20px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <img src="../../img/l.png" alt="Logo">
            <hr>
            <a href="#">
                <h3>Sobre</h3>
            </a>
        </nav>
    </header>
    <div class="container-fluid text-center mt-5" style="height: 10vh;">
        <div class="titulo my-3">
            <h1>Menu Principal</h1>
        </div>
    </div>

    <div class="botao form-group col">
        <button onclick="goBack()">Sair</button>
    </div>



    <div class="container-fluid no-border custom-padding text-center">
        <div class="row justify-content-center"> <!-- Adicionado justify-content-center -->
            <div class="col-md-3 col-sm-3">
                <a href="responder_formulario.php">
                    <button class="button"><img src="../../img/Formulario.png" alt="Formularios"><br> <br>
                        Formularios</button>
                </a>
            </div>
        </div>
    </div>



    <script>
        function goBack() {
            window.history.back();
        }
    </script>




    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/Jm