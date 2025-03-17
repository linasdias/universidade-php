<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema da Universidade</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Sistema da Universidade</h1>

    <div class="container">
        <h2 style="text-align:center;">Bem-vindo!</h2>
        <div class="button-container">
            <a href="create/form_aluno.php"><button>Cadastrar Novo Aluno</button></a>
            <a href="create/form_professor.php"><button>Cadastrar Novo Professor</button></a>
            <a href="create/form_disciplina.php"><button>Cadastrar Nova Disciplina</button></a>
        </div>
    </div>

    <div class="container">
        <h2>Alunos Cadastrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config/config.php';
                $sql = "SELECT id, nome, email FROM alunos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row["id"]}</td>
                                <td>{$row["nome"]}</td>
                                <td>{$row["email"]}</td>
                                <td>
                                    <a href='update/atualiza_aluno.php?id={$row["id"]}'>Editar</a> | 
                                    <a href='delete/deletar_aluno.php?id={$row["id"]}' onclick='return confirm(\"Tem certeza que deseja excluir?\")'>Deletar</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Nenhum aluno encontrado.</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h2>Professores Cadastrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Disciplina</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config/config.php';
                $sql = "SELECT id, nome, email, disciplina FROM professores";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row["id"]}</td>
                                <td>{$row["nome"]}</td>
                                <td>{$row["email"]}</td>
                                <td>{$row["disciplina"]}</td>
                                <td>
                                    <a href='update/atualiza_professor.php?id={$row["id"]}'>Editar</a> | 
                                    <a href='delete/deletar_professor.php?id={$row["id"]}' onclick='return confirm(\"Tem certeza que deseja excluir?\")'>Deletar</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Nenhum professor encontrado.</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    </div>

    <div class="container">
        <h2>Disciplinas Cadastradas</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config/config.php';
                $sql = "SELECT id, nome FROM disciplinas";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row["id"]}</td>
                                <td>{$row["nome"]}</td>
                                <td>
                                    <a href='update/atualiza_disciplina.php?id={$row["id"]}'>Editar</a> | 
                                    <a href='delete/deletar_disciplina.php?id={$row["id"]}' onclick='return confirm(\"Tem certeza que deseja excluir?\")'>Deletar</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Nenhuma disciplina encontrada.</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
