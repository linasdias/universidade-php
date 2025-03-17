<?php
include '../config/config.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];

    $query = "UPDATE disciplinas SET nome = '$nome' WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        echo "Disciplina atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar disciplina: " . mysqli_error($conn);
    }
}
?>
