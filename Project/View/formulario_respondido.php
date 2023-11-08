<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- ... (cabeçalho) -->
</head>

<body>
    <div class="container">
        <h1>Formulário Respondido</h1>

        <form>
            <div class="form-group">
                <label for="resposta">Resposta:</label>
                <textarea class="form-control" id="resposta" rows="5" readonly><?php echo htmlspecialchars($_GET['resposta']); ?></textarea>
            </div>
        </form>
    </div>
</body>

</html>
