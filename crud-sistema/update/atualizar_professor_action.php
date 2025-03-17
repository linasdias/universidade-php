<?php
include '../config/config.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $disciplina = $_POST['disciplina'];

    $query = "UPDATE professores SET nome = '$nome', email = '$email', disciplina = '$disciplina' WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        echo "Professor atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar professor: " . mysqli_error($conn);
    }
}
?>
