<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resposta = $_POST["resposta"];
    $arquivo = 'respostas.csv';

    // Abre o arquivo CSV em modo de escrita
    $file = fopen($arquivo, 'a');

    // Escreve a resposta no arquivo CSV
    fputcsv($file, [$resposta]);

    // Fecha o arquivo CSV
    fclose($file);

    // Define um cookie para indicar que o formulário foi enviado
    setcookie('formularioEnviado', 'true', time() + 3600, '/'); // Cookie válido por 1 hora
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
                                <input type="time" class="form-control borda-vermelha placeholder-vermelho" placeholder="HoraInicial" name="horainicial" required>
                            </div>

                            <div class="alunos form-group col">
                                <label for="">HoraFinal:</label>
                                <input type="time" class="form-control borda-vermelha placeholder-vermelho" placeholder="HoraFinal" name="horafinal" required>
                            </div>
                        </div>
                    </div>



                    <div class="softwares form-group col mt-1 ">
                        <input type="text" class="form-control borda-vermelha placeholder-vermelho" placeholder="Softwares que serão utilizados" name="softwares" requirid>
                    </div>

                    <div class="botao form-group col text-center">
                        <button type="button" class="btn" id="botaoSalvar">Salvar</button>
                        <button type="button" class="btn" id="botaoEditar" style="display: none;">Editar</button>
                        <button type="button" class="btn" id="botaoAdicionar">Adicionar</button>
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



    <script>
        var campoDisciplina = document.querySelector('.disciplina');
        var campoTurma = document.querySelector('.turma');
        var campoAlunos = document.querySelector('.alunos');
        var campoSoftwares = document.querySelector('.softwares');

        var campoInput = campoDisciplina.querySelector('input');
        var campoInput2 = campoTurma.querySelector('input');
        var campoInput3 = campoAlunos.querySelector('input');
        var campoInput4 = campoSoftwares.querySelector('input');

        var textoSalvo = campoDisciplina.querySelector('#textoSalvo');
        var botaoSalvar = document.getElementById('botaoSalvar');
        var botaoEditar = document.getElementById('botaoEditar');

        botaoSalvar.addEventListener("click", function() {
            // Pega o valor do campo de entrada

            var valorDisciplina = campoInput.value;
            var valorTurma = campoInput2.value;
            var valorAlunos = campoInput3.value;
            var valorSoftwares = campoInput4.value;

            // Verifica se o campo de entrada está preenchido
            if (valorDisciplina.trim() !== '' && valorTurma.trim() !== '' && valorAlunos.trim() !== '' && valorSoftwares.trim() !== '') {
                // Exibe o texto com o valor da disciplina
                textoSalvo.textContent = "Disciplina: " + valorDisciplina;
                textoSalvo.style.display = 'none';

                // Oculta o campo de entrada
                campoInput2.style.display = 'none';
                campoInput3.style.display = 'none';
                campoInput4.style.display = 'none';

                // Diminui a altura da seção todoform
                document.querySelector('.todoform').style.height = '100px';

                // Oculta o botão "Salvar" e exibe o botão "Editar"
                botaoSalvar.style.display = 'none';
                botaoEditar.style.display = 'block';
            } else {
                // Exibe uma mensagem de erro caso o campo esteja vazio
                alert("Os campos de disciplina, turma, quantidade de alunos, softwares não podem estar vazios.");
            }
        });

        botaoEditar.addEventListener("click", function() {

            // Exibe o campo de entrada
            campoInput.style.display = 'block';
            campoInput2.style.display = 'block';
            campoInput3.style.display = 'block';
            campoInput4.style.display = 'block';

            // Aumenta a altura da seção todoform
            document.querySelector('.todoform').style.height = 'auto';

            // Oculta o texto salvo
            textoSalvo.style.display = 'none';
            textoSalvo.textContent = ''; // Limpa o texto

            // Oculta o botão "Editar" e exibe o botão "Salvar"
            botaoEditar.style.display = 'none';
            botaoSalvar.style.display = 'block';
        });

        var botaoAdicionar = document.getElementById('botaoAdicionar');
        var todoform = document.querySelector('.todoform');

        botaoAdicionar.addEventListener("click", function() {
            // Clone a seção do formulário
            var novaSecao = document.querySelector('.todoform').cloneNode(true);

            // Limpe os campos clonados
            var camposClonados = novaSecao.querySelectorAll('input[type="text"], input[type="number"]');
            camposClonados.forEach(function(campo) {
                campo.value = '';
            });

            // Limpe o texto salvo
            novaSecao.querySelector('#textoSalvo').textContent = '';

            // Altere os IDs dos botões para evitar conflitos
            novaSecao.querySelector('#botaoSalvar').id = 'botaoSalvarNovo';
            novaSecao.querySelector('#botaoEditar').id = 'botaoEditarNovo';

            // Oculte o botão "Editar" e exiba o botão "Salvar" na nova seção
            novaSecao.querySelector('#botaoSalvarNovo').style.display = 'block';
            novaSecao.querySelector('#botaoEditarNovo').style.display = 'none';

            // Adicione a nova seção após a seção existente
            todoform.appendChild(novaSecao);
        });
    </script>

</body>

</html>