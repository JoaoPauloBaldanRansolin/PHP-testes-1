<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ERP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-decoration-none" href="home.php"
                            onclick="loadPage('home')">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-decoration-none" href="about.php"
                            onclick="loadPage('about')">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"
                            onclick="loadPage('contact')">Contact</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                            Outras páginas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="help.php">Help</a></li>
                        </ul>
                    </li>-->
                    <?php
                    session_start();
                    if (isset($_SESSION['role'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../logout.php">
                                Logout
                            </a>
                        </li>
                    <?php
                    } else {
                    ?>

                        <li class="nav-item">
                            <a class="nav-link" href="../login.php">
                                Login
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/997611/pexels-photo-997611.jpeg" class="d-block w-100" alt="paisagem">
            </div>
            <!-- <div class="carousel-item">
                <img src="../assets/img/photo.jpg" class="d-block w-100" alt="India">
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Primeiro slide</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Segundo slide</span>
        </button>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-8">
                <h3>Cadastro de clientes ERP:</h3><a class="btn btn-primary" href="../register.php">Registre-se</a>
            </div>
            <div class="col-4"><img src="" alt=""></div>
        </div>
        <div class="row">
            <div class="col-8">
                <h3>Possui </h3><a class="btn btn-primary" href="../register.php">Registre-se</a>
            </div>
            <div class="col-4"><img src="" alt=""></div>
        </div>
    </div>

    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>