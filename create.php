<?php include '../config/db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Usuário</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Adicionar Novo Usuário</h2>
    <form method="post" action="create.php">
        Nome: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="submit" name="submit" value="Salvar">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Novo usuário adicionado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        echo "<br><br><a href='index.php'>Voltar para a lista de usuários</a>";
    }
    ?>
</body>
</html>