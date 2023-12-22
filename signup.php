<?php
include_once 'header.php';
?>
<title>Signup - Oleo Limpo</title>

<section class="py-4 py-md-5 my-5">
    <div class="container py-md-5">
        <div class="row">
            <div class="col-md-6 text-center"><img class="img-fluid w-100" src="assets/img/illustrations/Asset%202.svg"></div>
            <div class="col-md-5 col-xl-4 text-center text-md-start">
                <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1" style="color: rgb(1,113,61);">Crie Seu Acesso!</span></h2>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <h2 class="display-6 fw-bold mb-5"><span class="underline pb-2" style="color: rgb(1,113,61);">Registrado com sucesso!</span></h2>
                        <a href="login.php"><button class="btn btn-primary shadow" name="closePopup" style="background: rgb(1,113,61);">Ir para o Login!</button></a> 
                    </div>
                </div>
                <form action="includes/signup.inc.php" id="address-form" method="post" data-bs-theme="light">
                    <div class="alinhar">
                        <div class="nome mb-3"><input class="shadow-sm form-control" type="text" name="nome" placeholder="Nome" required></div>
                        <div class="sobrenome mb-3"><input class="shadow-sm form-control" type="text" name="sobrenome" placeholder="Sobrenome" required></div>
                        <div class="email-input mb-3"><input class="shadow-sm form-control" type="email" name="email" placeholder="E-mail" required></div>
                        <div class="cep mb-3"><input class="shadow-sm form-control" type="text" id="cep" name="cep" placeholder="CEP" minlength="8" maxlength="8" required></div>
                        <div class="estado mb-3"><select class="shadow-sm form-control cep-input" type="text" id="region" name="estado" placeholder="SP" minlength="2" required disabled data-input>
                                <option selected>Estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select></div>

                        <div class="cidade mb-3"><input class="shadow-sm form-control cep-input" id="city" type="text" name="cidade" placeholder="Cidade" required disabled data-input></div>
                        <div class="bairro mb-3"><input class="shadow-sm form-control cep-input" id="neighborhood" type="text" name="bairro" placeholder="Bairro" required disabled data-input></div>
                        <div class="rua mb-3"><input class="shadow-sm form-control cep-input" id="address" type="text" name="rua" placeholder="Rua" required disabled data-input></div>
                        <div class="numero-rua mb-3"><input class="shadow-sm form-control cep-input" id="number" type="text" name="numero_rua" placeholder="Número casa" required data-input=""></div>
                        <div class="senha mb-3"><input class="shadow-sm form-control" id="senha" type="password" name="password" placeholder="Senha" minlength="8" required></div>
                        <div class="senharepetir mb-3"><input class="shadow-sm form-control" type="password" name="password_repeat" placeholder="Repetir Senha" required></div>
                        <p id="showPwmMessage"></p>
                    </div>
                    <div class="mb-5">
                        <button class="btn btn-primary shadow" type="submit" name="submit" style="background: rgb(1,113,61);">Criar Conta</button>
                    </div>
                </form>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Preencha todos os campos</p>";
                    } else if ($_GET["error"] == "passwordsdontmatch") {
                        echo "<p>Senhas não coincidem</p>";
                    } else if ($_GET["error"] == "emailexists") {
                        echo "<p>Email já existe</p>";
                    } else if ($_GET["error"] == "stmtfailed") {
                        echo "<p>Algo deu errado</p>";
                    } else if ($_GET["error"] == "none") {
                        echo "<script> window.onload = function() {
                            openModal();
                        }; </script>";
                    }
                }
                ?>
                <p class="text-muted">Tem uma conta?&nbsp;<a href="login.php">Entrar<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-narrow-right">
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
<script src="js/signupScript.js" defer></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/startup-modern.js"></script>

</body>

</html>