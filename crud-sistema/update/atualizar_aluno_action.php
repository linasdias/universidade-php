<?php
include '../config/config.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $query = "UPDATE alunos SET nome = '$nome', email = '$email' WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        echo "Aluno atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar aluno: " . mysqli_error($conn);
    }
}
?>
