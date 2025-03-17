<?php
include '../config/config.php';

$nome = $_POST['nome'];

$sql = "INSERT INTO disciplinas (nome) VALUES ('$nome')";

if ($conn->query($sql) === TRUE) {
    echo "Disciplina cadastrada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
