<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Disciplina</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <div class="form-container">
        <h2>Cadastro de Disciplina</h2>
        <form action="processa_disciplina.php" method="POST">
            <label for="nome">Nome da Disciplina:</label>
            <input type="text" id="nome" name="nome" required>

            <input type="submit" value="Cadastrar">
        </form>
    </div>

</body>
</html>
