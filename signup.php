<?php 
    include_once 'header.php';
?>
    <section class="py-4 py-md-5 my-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="assets/img/illustrations/Asset%202.svg"></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1" style="color: rgb(1,113,61);">Crie Seu Acesso!</span></h2>
                    <form action="includes/signup.inc.php" method="post" data-bs-theme="light">
                        <div class="alinhar">
                            <div class="mb-3"><input class="shadow-sm form-control" type="text" name="nome" placeholder="Nome..."></div>
                            <div class="mb-3"><input class="shadow-sm form-control" type="text" name="sobrenome" placeholder="Sobrenome..."></div>
                            <div class="email-input mb-3"><input class="shadow-sm form-control" type="email" name="email" placeholder="E-mail..."></div>
                            <div class="cep mb-3"><input class="shadow-sm form-control" type="text" name="cep" placeholder="CEP..."></div>
                            <div class="bairro mb-3"><input class="shadow-sm form-control" type="text" name="bairro" placeholder="Bairro..."></div>
                            <div class="rua mb-3"><input class="shadow-sm form-control" type="text" name="rua" placeholder="Rua..."></div>
                            <div class="numero-rua mb-3"><input class=" shadow-sm form-control" type="text" name="numero_rua" placeholder="Numero rua..."></div>
                            <div class="mb-3"><input class="shadow-sm form-control" type="password" name="password" placeholder="Senha..."></div>
                            <div class="mb-3"><input class="shadow-sm form-control" type="password" name="password_repeat" placeholder="Repetir Senha..."></div>   
                        </div>
                                                
                        <div class="mb-5">
                            <button class="btn btn-primary shadow" type="submit" name="submit" style="background: rgb(1,113,61);">Criar Conta</button>
                        </div>
                    </form>
                    <p class="text-muted">Tem uma conta?&nbsp;<a href="login.html">Entrar<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-narrow-right">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="15" y1="16" x2="19" y2="12"></line>
                                <line x1="15" y1="8" x2="19" y2="12"></line>
                            </svg></a>&nbsp;</p>
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