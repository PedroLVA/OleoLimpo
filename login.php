<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in - Óleo Limp</title>
    <meta name="description" content="O projeto ÓLEO DO BEM tem o objetivo de conscientizar e incentivar a população a descartar corretamente o óleo de cozinha, minimizando impactos ambientais e colaborando com uma educação ambiental ampla e efetiva.">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Raleway.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-shrink py-3 navbar-light" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"></a><a href="index.php"><img src="assets/img/LOGO-OLEO-LIMPO.png" width="171" height="36"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                </ul><a class="btn btn-primary shadow" role="button" href="signup.html" style="margin-right: 6px;background: #00000000;color: var(--bs-body-color);">Inscreva-se</a><a class="btn btn-primary shadow" role="button" href="login.html" style="background: rgb(1,113,61);">Entrar<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-user" data-bss-hover-animate="swing" style="margin-left: 2px;">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg>&nbsp;</a>
            </div>
        </div>
    </nav>
    <section class="py-4 py-md-5 my-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="assets/img/illustrations/Asset%201.svg"></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1" style="color: rgb(1,113,61);">Conecte-se!</span></h2>
                    <form method="post" data-bs-theme="light">
                        <div class="mb-3"><input class="shadow form-control" type="email" name="email" placeholder="E-mail"></div>
                        <div class="mb-3"><input class="shadow form-control" type="password" name="password" placeholder="Senha"></div>
                        <div class="mb-5"><button class="btn btn-primary shadow" type="submit" style="background: rgb(1,113,61);">Entrar</button></div>
                    </form>
                    <p class="text-muted"><a href="forgotten-password.php">Esqueceu sua senha?</a></p>
                </div>
            </div>
        </div>
    </section>
    <?php 
        include_once 'footer.php';
    ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/startup-modern.js"></script>
</body>

</html>