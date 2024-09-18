<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Registrar</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div class="container mt-4">
        <h1>Registrar</h1>
        <form action="register_process.php" method="post">
            <div class="form-group">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="username"
                    class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password"
                    class="form-control" required>
            </div>
            <button type="submit" class="btn-btn-primary">Registrar</button>
            <a href="login.php">login</a>
        </form>
    </div>
</body>

</html>