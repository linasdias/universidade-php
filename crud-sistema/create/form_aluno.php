<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <div class="form-container">
        <h2>Cadastro de Aluno</h2>
        <form action="processa_aluno.php" method="POST">
            <label for="nome">Nome do Aluno:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail do Aluno:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Cadastrar">
        </form>
    </div>

</body>
</html>
