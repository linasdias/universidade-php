<?php
include '../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM professores WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $sql = "DELETE FROM professores WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);

        if ($stmt->execute()) {
            echo "Professor deletado com sucesso.";
        } else {
            echo "Erro ao deletar professor.";
        }
    } else {
        echo "Professor não encontrado.";
    }
    $stmt->close();
} else {
    echo "ID não especificado.";
}

$conn->close();

header('Location: ../index.php');
exit();
?>
