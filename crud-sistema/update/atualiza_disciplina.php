<?php
include '../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM disciplinas WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $disciplina = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Disciplina</title>
</head>
<body>
    <h1>Atualizar Dados da Disciplina</h1>

    <form action="atualizar_disciplina_action.php" method="post">
        <input type="hidden" name="id" value="<?php echo $disciplina['id']; ?>">

        <label for="nome">Nome da Disciplina:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $disciplina['nome']; ?>" required><br><br>

        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
