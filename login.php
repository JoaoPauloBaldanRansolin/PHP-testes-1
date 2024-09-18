<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div class="container mt-4">
        <h1>Login</h1>
        <form action="login_process.php" method="post">
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
            <button type="submit" class="btn btn-primary">Entrar</button>
            <a href="register.php">registro</a>
        </form>
    </div>
</body>

</html>