<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <div class="form-container">
        <h2>Cadastro de Professor</h2>
        <form action="processa_professor.php" method="POST">
            <label for="nome">Nome do Professor:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail do Professor:</label>
            <input type="email" id="email" name="email" required>

            <label for="disciplina">Disciplina:</label>
            <input type="text" id="disciplina" name="disciplina" required>

            <input type="submit" value="Cadastrar">
        </form>
    </div>

</body>
</html>
