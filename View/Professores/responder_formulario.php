<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/formulario.css">
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
                <form action="../../processos/processar_resposta.php" method="post">
                    <div class="disciplina form-group col mt-3">
                        <input type="text" class="form-control borda-vermelha placeholder-vermelho"
                            placeholder="Nome da disciplina" name="disciplina" required>
                        <span id="textoSalvo" style="display: none;"></span>
                    </div>

                    <div class="dadosform w-100 container-fluid mt-1">
                        <div class="form-row">
                            <div class="turma form-group col">
                                <input type="text" class="form-control borda-vermelha placeholder-vermelho"
                                    placeholder="Turma" name="turma" required>
                            </div>

                            <div class="alunos form-group col">
                                <input type="number" class="form-control borda-vermelha placeholder-vermelho"
                                    placeholder="Quantidade de alunos" name="quantidadedalunos" required>
                            </div>
                        </div>
                    </div>
                    <center>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Segunda Feira</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Terça Feira</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Quarta Feira</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
                            <label class="form-check-label" for="inlineCheckbox3">Quinta Feira</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option5">
                            <label class="form-check-label" for="inlineCheckbox3">Sexta Feira</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option6">
                            <label class="form-check-label" for="inlineCheckbox3">Sabado</label>
                        </div>
                    </center>


                    <div class="dadosform w-100 container-fluid mt-1">
                        <div class="form-row">
                            <div class="turma form-group col">
                                <label for="">HoraInicial:</label>
                                <input type="time" class="form-control borda-vermelha placeholder-vermelho"
                                    placeholder="HoraInicial" name="horainicial" required>
                            </div>

                            <div class="alunos form-group col">
                                <label for="">HoraFinal:</label>
                                <input type="time" class="form-control borda-vermelha placeholder-vermelho"
                                    placeholder="HoraFinal" name="horafinal" required>
                            </div>
                        </div>
                    </div>



                    <div class="softwares form-group col mt-1 ">
                        <input type="text" class="form-control borda-vermelha placeholder-vermelho"
                            placeholder="Softwares que serão utilizados" name="softwares" requirid>
                    </div>

                    <div class="botao form-group col text-center">
                        <button type="submit" class="btn">Enviar Resposta</button>
                    </div>
                    <div class="botao form-group col text-center">
                    <button onclick="goBack()" class="btn">Voltar</button>
                    </div>


                </form>
            </section>
        </div>
    </main>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>


    <script>
        document.getElementById('botaoEnviar').addEventListener('click', function () {
            // Cria um cookie chamado 'formularioEnviado' com valor 'true' e duração de 1 dia
            document.cookie = 'formularioEnviado=true; expires=Fri, 31 Dec 9999 23:59:59 GMT';
        });
    </script>

</body>

</html>