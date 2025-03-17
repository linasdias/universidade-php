<?php
include '../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM professores WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $professor = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Professor</title>
</head>
<body>
    <h1>Atualizar Dados do Professor</h1>

    <form action="atualizar_professor_action.php" method="post">
        <input type="hidden" name="id" value="<?php echo $professor['id']; ?>">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $professor['nome']; ?>" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="<?php echo $professor['email']; ?>" required><br><br>

        <label for="disciplina">Disciplina:</label>
        <input type="text" id="disciplina" name="disciplina" value="<?php echo $professor['disciplina']; ?>" required><br><br>

        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
