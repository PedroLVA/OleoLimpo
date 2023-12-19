<?php 
    include_once 'header.php';
?>
<title>Esqueci a senha - Oleo Limpo</title>
    <section class="py-4 py-md-5 mt-5">
        <div class="container py-md-5">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="assets/img/illustrations/Asset%203.svg"></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-4"><span class="underline"><span style="color: rgb(1, 113, 61);">Esqueceu Sua Senha</span></span><span style="color: rgb(1, 113, 61);">?</span></h2>
                    <p class="text-muted">Digite o e-mail associado à sua conta e nós lhe enviaremos um link de redefinição.</p>
                    <form method="post" data-bs-theme="light">
                        <div class="mb-3"><input class="shadow form-control" type="email" name="email" placeholder="E-mail"></div>
                        <div class="mb-5"><button class="btn btn-primary shadow" type="submit" style="background: rgb(1,113,61);">Resetar Senha</button></div>
                    </form>
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