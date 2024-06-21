<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Excluir Usuário</title>
</head>
<body>
    <h2>Excluir Usuário</h2>

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Usuário excluído com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        echo "<br><br><a href='index.php'>Voltar para a lista de usuários</a>";
    }
    ?>
</body>
</html>