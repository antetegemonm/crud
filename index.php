<?php include '../config/db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>CRUD de Usuários</h2>
    <a href="create.php">Adicionar Novo Usuário</a>
    <br><br>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        <?php
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>
                            <a href='update.php?id=" . $row['id'] . "'>Editar</a>
                            <a href='delete.php?id=" . $row['id'] . "'>Excluir</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum usuário encontrado</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>