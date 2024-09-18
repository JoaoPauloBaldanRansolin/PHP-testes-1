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
<?php
    session_start();
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        echo 'Acesso negado';
        //header("Location: ../login.php");
    }
?>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Meu Sistema</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="home.php" href="home.php"
                            onclick="loadPage('home')">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="about.php" href="about.php"
                            onclick="loadPage('about')">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"
                            onclick="loadPage('contact')">Contat</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Outras páginas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="help.php">Help</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">
                            Logout
                        </a>
                    </li>
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
                <img src="https://www.google.com/imgres?q=imagens&imgurl=https%3A%2F%2Fmedia.istockphoto.com%2Fid%2F517188688%2Fpt%2Ffoto%2Fpaisagem-de-montanha.jpg%3Fs%3D612x612%26w%3D0%26k%3D20%26c%3DuFGUrUT6gA8FrTWhE10YYzngWPlDLssKxJiDs1Qw2Qs%3D&imgrefurl=https%3A%2F%2Fwww.istockphoto.com%2Fbr%2Fbanco-de-imagens%2Fnatureza-e-paisagens&docid=ttmosThLtFCTcM&tbnid=oa7_1poSvrt70M&vet=12ahUKEwjev73W98CIAxWyNTUKHYO6CzQQM3oECBoQAA..i&w=612&h=384&hcb=2&ved=2ahUKEwjev73W98CIAxWyNTUKHYO6CzQQM3oECBoQAA" class="d-block w-100" alt="paisagem">
            </div>
            <div class="carousel-item">
                <img src="https://www.google.com/imgres?q=imagens&imgurl=https%3A%2F%2Fstatic.vecteezy.com%2Fti%2Ffotos-gratis%2Ft2%2F17323707-close-up-de-um-reptil-em-um-galho-de-arvore-contra-um-impressionante-papel-de-parede-de-fundo-natural-hd-foto.jpg&imgrefurl=https%3A%2F%2Fpt.vecteezy.com%2Ffotos-gratis%2Fhd&docid=ZbHyNRByFQqT_M&tbnid=_RVW40eGubpUyM&vet=12ahUKEwjev73W98CIAxWyNTUKHYO6CzQQM3oECF8QAA..i&w=300&h=200&hcb=2&ved=2ahUKEwjev73W98CIAxWyNTUKHYO6CzQQM3oECF8QAA" class="d-block w-100" alt="lagarto">
            </div>
            <div class="carousel-item">
                <img src="https://www.google.com/imgres?q=imagens&imgurl=https%3A%2F%2Fcdn.pixabay.com%2Fphoto%2F2023%2F08%2F23%2F15%2F44%2Fai-generated-8208847_1280.png&imgrefurl=https%3A%2F%2Fpixabay.com%2Fpt%2Fimages%2Fsearch%2Ffundo%2520de%2520tela%2F&docid=CkJhsmTyJswozM&tbnid=SUnJwV1qfjui2M&vet=12ahUKEwjev73W98CIAxWyNTUKHYO6CzQQM3oECCkQAA..i&w=1280&h=717&hcb=2&ved=2ahUKEwjev73W98CIAxWyNTUKHYO6CzQQM3oECCkQAA" class="d-block w-100" alt="bird">
            </div>
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
        <div id="content">
            <p>Olá mundo!</p>
        </div>
    </div>
    <class type="">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="app.js"></script>
</body>

</html>