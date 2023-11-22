<?php

if (!empty($_GET['cod_resposta'])) {

    include_once("../conexao/conexao.php");

    $cod_resposta = $_GET['cod_resposta'];

    $sqlSelect = "SELECT * FROM resposta_formulario WHERE cod_resposta=$cod_resposta";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {

            $nome_resposta = $user_data['nome_resposta'];
            $disciplina_resposta = $user_data['disciplina_resposta'];
            $turma_resposta = $user_data['turma_resposta'];
            $quantidade_resposta = $user_data['quantidade_resposta'];
            $software_resposta = $user_data['software_resposta'];
            $hora_inicial = $user_data['inicio_resposta'];
            $hora_final = $user_data['fim_resposta'];
            
        }
    } else {
        header('location:../View/ver_respostas.php');
    }
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/formulario.css">
    <title>Formulário</title>
</head>

<body>

    <main>
        <div class="container-fluid align-items-center justify-content-center lg-20" style="height: 100vh;">
            <div class="div0 w-100 mb-0"></div>
            <div class="div1 w-100 mb-0"></div>
            <div class="div2 w-100 mb-2">
                <div class="tituloformulario form-group">
                    <h1>Formulário</h1>
                    <p>Por favor, preencher as informações solicitadas:</p>
                </div>
                <hr>
                </hr>
                <div class="informacional form-group">
                    <p>E-mail institucional: </p>
                </div>
            </div>
            <div class="div3 w-100 mb-2 ">
                <div class="titulonome">
                    <h1>Nome:</h1>
                    <div class="hr my-5">
                        <hr>
                        </hr>
                    </div>
                </div>
            </div>

            <section class="todoform w-100 p-4">
                <form action="../processos/processar_reserva.php" method="post">
                    <div class="disciplina form-group col mt-3">
                        <input type="text" class="form-control borda-vermelha placeholder-vermelho" placeholder="Nome da disciplina" name="disciplina" required>
                        <span id="textoSalvo" style="display: none;"></span>
                    </div>

                    <div class="dadosform w-100 container-fluid mt-1">
                        <div class="form-row">
                            <div class="turma form-group col">
                                <input type="text" class="form-control borda-vermelha placeholder-vermelho" placeholder="Turma" name="turma" required>
                            </div>

                            <div class="alunos form-group col">
                                <input type="number" class="form-control borda-vermelha placeholder-vermelho" placeholder="Quantidade de alunos" name="quantidadedalunos" required>
                            </div>
                        </div>
                    </div>
                   


                        <label for="diasSemana">Dias da Semana:</label>
                        <select class="form-control borda-vermelha placeholder-vermelho" name="diasSemana" required>
                            <option value="Segunda-feira">Segunda-feira</option>
                            <option value="Terça-feira">Terça-feira</option>
                            <option value="Quarta-feira">Quarta-feira</option>
                            <option value="Quinta-feira">Quinta-feira</option>
                            <option value="Sexta-feira">Sexta-feira</option>
                            <option value="Sábado">Sábado</option>
                        </select>


                    <div class="dadosform w-100 container-fluid mt-1">
                        <div class="form-row">
                            <div class="turma form-group col">
                                <label for="">HoraInicial:</label>
                                <input type="time" class="form-control borda-vermelha placeholder-vermelho" placeholder="HoraInicial" name="horainicial" required>
                            </div>

                            <div class="alunos form-group col">
                                <label for="">HoraFinal:</label>
                                <input type="time" class="form-control borda-vermelha placeholder-vermelho" placeholder="HoraFinal" name="horafinal" required>
                            </div>
                        </div>
                    </div>

                    <div class="dadosform w-100 container-fluid mt-1">
                        <div class="form-row">
                            <div class="turma form-group col">
                                <input type="text" class="form-control borda-vermelha placeholder-vermelho" placeholder="Sala" name="sala" required>
                            </div>

                            <div class="alunos form-group col">
                                <input type="number" class="form-control borda-vermelha placeholder-vermelho" placeholder="Quantidade de maquinas" name="quantidademaquinas" required>
                            </div>
                        </div>
                    </div>

                    <div class="softwares form-group col mt-1 ">
                        <input type="text" class="form-control borda-vermelha placeholder-vermelho" placeholder="Softwares que serão utilizados" name="softwares" requirid>
                    </div>

                    <div class="botao form-group col text-center">
                        <button type="submit" class="btn">Enviar Resposta</button>
                    </div>

                </form>
            </section>
        </div>
    </main>


    <script>
        document.getElementById('botaoEnviar').addEventListener('click', function() {
            // Cria um cookie chamado 'formularioEnviado' com valor 'true' e duração de 1 dia
            document.cookie = 'formularioEnviado=true; expires=Fri, 31 Dec 9999 23:59:59 GMT';
        });
    </script>

</body>

</html>