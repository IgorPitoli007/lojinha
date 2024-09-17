<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lojinha</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="painel.php">Painel</a></li>
            <li><a href="login.php">login</a></li>
        </ul>
    </nav>
    <form action="tratar.php" method="POST">
        <label for="email">Nome</label>
        <input type="email" name="email">
        <label for="senha">Senha</label>
        <input type="password" name="senha">
        <input type="submit" value="enviar">
    </form>
</body>
</html>