<?php
include '../config/config.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$disciplina = $_POST['disciplina'];

$sql = "INSERT INTO professores (nome, email, disciplina) VALUES ('$nome', '$email', '$disciplina')";

if ($conn->query($sql) === TRUE) {
    echo "Professor cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
