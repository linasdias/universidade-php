<?php
include '../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM alunos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $sql = "DELETE FROM alunos WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);

        if ($stmt->execute()) {
            echo "Aluno deletado com sucesso.";
        } else {
            echo "Erro ao deletar aluno.";
        }
    } else {
        echo "Aluno não encontrado.";
    }
    $stmt->close();
} else {
    echo "ID não especificado.";
}

$conn->close();

header('Location: ../index.php');
exit();
?>
