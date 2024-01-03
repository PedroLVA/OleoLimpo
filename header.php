<?php
session_start();
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="O projeto ÓLEO DO BEM tem o objetivo de conscientizar e incentivar a população a descartar corretamente o óleo de cozinha, minimizando impactos ambientais e colaborando com uma educação ambiental ampla e efetiva.">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Raleway.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-shrink py-3 navbar-light" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><a href="index.php"><img src="assets/img/LOGO-OLEO-LIMPO.png" width="171" height="36"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav mx-auto"></ul>
                    <?php
                    if (isset($_SESSION["iddoador"])) {
                        echo "
                        <div class='dropdown'>
                            <a class='btn btn-secondary dropdown-toggle' style='background: rgb(1,113,61); color: white; border-color: white;: none;' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                Gerenciar
                            </a>

                            <ul class='dropdown-menu'>
                                <li><a class='dropdown-item' href='cad-oil.php'>Doar</a></li>
                                <li><a class='dropdown-item' href='doacoes-usuario.php'>Ver doações</a></li>
                                <li><a class='dropdown-item' href='includes/logout.inc.php'>Sair</a></li>
                            </ul>
                        </div>
                            ";
                    } else {
                        echo "<a class='btn btn-primary shadow' role='button' href='signup.php' style='margin-right: 6px;background: #00000000;color: var(--bs-body-color);'>Inscreva-se</a>";
                        echo "<a class='btn btn-primary shadow' role='button' href='login.php' style='background: rgb(1,113,61);'>Entrar<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icon-tabler-user' data-bss-hover-animate='swing' style='margin-left: 2px;'>
                        ";
                    }
                    ?>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg>&nbsp;
            </a>
        </div>
        </div>
    </nav>