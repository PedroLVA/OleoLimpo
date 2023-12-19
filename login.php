<?php
include_once 'header.php';
?>
<title>Login - Oleo Limpo</title>
<section class="py-4 py-md-5 my-5">
    <div class="container py-md-5">
        <div class="row">
            <div class="col-md-6 text-center"><img class="img-fluid w-100" src="assets/img/illustrations/Asset%201.svg"></div>
            <div class="col-md-5 col-xl-4 text-center text-md-start">
                <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1" style="color: rgb(1,113,61);">Conecte-se!</span></h2>

                <form action="includes/login.inc.php" method="post" data-bs-theme="light">
                    <div class="mb-3"><input class="shadow form-control" type="text" name="email" placeholder="E-mail"></div>
                    <div class="mb-3"><input class="shadow form-control" type="password" name="password" placeholder="Senha"></div>
                    <div class="mb-5"><button class="btn btn-primary shadow" type="submit" name="submit" style="background: rgb(1,113,61);">Entrar</button></div>
                </form>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Preencha todos os campos</p>";
                    } else if ($_GET["error"] == "wronglogin") {
                        echo "<p>Dados incorretos!</p>";
                    }  else if ($_GET["error"] == "none") {
                        echo "<p>Logado com sucesso!</p>";
                    }
                }

                ?>
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