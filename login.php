<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-5">
                <h1 class="text-center">Login</h1>
                <form action="login_process.php" method="post">
                    <div class="form-group mb-2">
                        <label for="username">Usuário</label>
                        <input type="text" id="username" name="username"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password"
                            class="form-control" required>
                    </div>
                    <div class="d-flex">
                        
                        <div class="col">
                            <button type="submit" class="btn btn-primary mt-4">Entrar</button>
                        </div>
                        <div class="col mt-4">
                            <a href="register.php" class="mt-4">Registro</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="app.js"></script>

</html>