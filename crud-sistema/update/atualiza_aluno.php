<?php
include('../config/config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM alunos WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $aluno = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Aluno</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Atualizar Dados do Aluno</h2>

        <form action="atualizar_aluno_action.php" method="post">
            <input type="hidden" name="id" value="<?php echo $aluno['id']; ?>">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $aluno['nome']; ?>" required><br><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?php echo $aluno['email']; ?>" required><br><br>

            <input type="submit" value="Atualizar">
        </form>
    </div>
</body>
</html>
