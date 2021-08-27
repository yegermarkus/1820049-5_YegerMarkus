<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CCS custom -->
    <link rel="stylesheet" href="css/custom.css">

    <title>Doces Caseiros de Minas</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <img src="images/logo-site.png" alt="">
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item mx-5">
                            <a class="nav-link" href="index.php?page=pages/home.php">Home</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link" href="index.php?page=pages/quemsomos.php">Quem Somos</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link" href="index.php?page=pages/contato.php">Contato</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link" href="index.php?page=pages/localizacao.php">Localização</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <?php
        $pag = $_GET["page"];

        if ($pag == "pages/home.php") {
            require_once "pages/home.php";
        }

        if ($pag == "pages/quemsomos.php") {
            require_once 'pages/quemsomos.php';
        }

        if ($pag == 'pages/contato.php') {
            require_once 'pages/contato.php';
        }

        if ($pag == 'pages/localizacao.php') {
            require_once 'pages/localizacao.php';
        }

        ?>

    </main>

    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <p class="text-uppercase font-weight-bold">Dados Acadêmicos</p>
                </div>
                <div class="col">
                    <p>Yeger Markus Reis</p>
                </div>
                <div class="col">
                    <p>RA - 1820049-5</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>