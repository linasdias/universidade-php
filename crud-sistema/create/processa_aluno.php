<?php
include '../config/config.php';

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO alunos (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Aluno cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
