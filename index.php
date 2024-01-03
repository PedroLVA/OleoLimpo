<?php
include_once 'header.php';
?>
<title>Oleo Limpo</title>
<header class="pt-5">
    <div class="container pt-4 pt-xl-5">
        <div class="row pt-5">
            <div class="col-md-8 text-center text-md-start mx-auto">
                <div class="text-center">
                    <?php
                    if (isset($_SESSION["iddoador"])) {
                        echo "<h1 class='display-4 fw-bold mb-5'>Bem vindo,&nbsp;&nbsp;<span class='underline' style='color: rgb(1,113,61);'><strong>".$_SESSION["nomedoador"]."</strong></span></h1>";
                    } else {
                        echo '<h1 class="display-4 fw-bold mb-5">Óleo Usado, Futuro&nbsp; &nbsp;<span class="underline" style="color: rgb(1,113,61);"><strong>Preservado</strong></span></h1>';
                    }
                    ?>
                    <p class="fs-5 text-muted mb-5" style="color: #000000c0;">O projeto <strong>ÓLEO LIMPO</strong>&nbsp;tem o objetivo de conscientizar e incentivar a população a descartar corretamente o óleo de cozinha.</p>
                    <a href=<?php //checa se o usuario ta logado e redireciona baseado nisso
                            if (isset($_SESSION["iddoador"])) {
                                echo  "'cad-oil.php'";
                            } else {
                                echo  "'signup.php'";
                            }
                            ?>><button class="btn btn-primary" data-bss-hover-animate="swing" type="submit" style="transform: scale(1.07);background: rgb(1,113,61);border-width: 0px;border-style: none;border-top-style: none;border-right-width: 0px;border-right-style: none;border-bottom-style: none;border-left-width: 0px;border-left-style: none;">Doe agora mesmo!&nbsp;</button></a>
                </div>
            </div>
            
            <div class="col-12 col-lg-10 mx-auto">
                <div class="text-center position-relative"><img class="img-fluid" src="assets/img/illustrations/Asset%201@4x-8.png" style="width: 675px;margin: 19px;" width="800" height="709"></div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col">
                <div class="card border-light border-1 d-flex justify-content-center p-4" data-bss-hover-animate="bounce">
                    <div class="card-body">
                        <div class="bs-icon-lg bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-cloud" data-bss-hover-animate="tada">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-12"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="fw-bold">100% online</h4>
                            <p class="text-muted">A doação poderá ser feita digitalmente.</p>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col">
                <div class="card border-light border-1 d-flex justify-content-center p-4" data-bss-hover-animate="bounce">
                    <div class="card-body">
                        <div class="bs-icon-lg bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-recycle" data-bss-hover-animate="tada">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 17l-2 2l2 2m-2 -2h9a2 2 0 0 0 1.75 -2.75l-.55 -1"></path>
                                <path d="M12 17l-2 2l2 2m-2 -2h9a2 2 0 0 0 1.75 -2.75l-.55 -1" transform="rotate(120 12 13)"></path>
                                <path d="M12 17l-2 2l2 2m-2 -2h9a2 2 0 0 0 1.75 -2.75l-.55 -1" transform="rotate(240 12 13)"></path>
                            </svg></div>
                        <div>
                            <h4 class="fw-bold">Reciclar</h4>
                            <p class="text-muted">O projeto dá um fim adequado ao óleo&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-4 py-xl-5">
        <div class="row">
            <div class="col-md-6">
                <h3 class="display-6 fw-bold pb-md-4">Descarte corretamente e proteja o&nbsp;<span class="underline" style="color: rgb(1,113,61);">ambiente</span></h3>
            </div>
            <div class="col-md-6 pt-4">
                <p class="text-muted mb-4">Faça sua parte! Recicle o óleo de cozinha e contribua para a preservação do meio ambiente.</p>
            </div>
        </div>
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                <div>
                    <div class="row gy-2 row-cols-1 row-cols-sm-2">
                        <div class="col text-center text-md-start">
                            <div class="d-flex justify-content-center align-items-center justify-content-md-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-trees fs-3 text-primary bg-secondary">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="3" width="8" height="14" rx="4"></rect>
                                    <rect x="12" y="7" width="8" height="10" rx="3"></rect>
                                    <line x1="8" y1="21" x2="8" y2="13"></line>
                                    <line x1="16" y1="21" x2="16" y2="14"></line>
                                </svg>
                                <h5 class="fw-bold mb-0 ms-2">Meio Ambiente</h5>
                            </div>
                            <p class="text-muted my-3">A coleta e o descarte adequado de óleo são práticas fundamentais.</p>
                        </div>
                        <div class="col text-center text-md-start">
                            <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-users fs-3 text-primary bg-secondary">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                </svg>
                                <h5 class="fw-bold mb-0 ms-2">Humano</h5>
                            </div>
                            <p class="text-muted my-3">Melhora a qualidade de vida da população..</p>
                        </div>
                        <div class="col text-center text-md-start">
                            <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-wind fs-3 text-primary bg-secondary">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 8h8.5a2.5 2.5 0 1 0 -2.34 -3.24"></path>
                                    <path d="M3 12h15.5a2.5 2.5 0 1 1 -2.34 3.24"></path>
                                    <path d="M4 16h5.5a2.5 2.5 0 1 1 -2.34 3.24"></path>
                                </svg>
                                <h5 class="fw-bold mb-0 ms-2">Desperdício</h5>
                            </div>
                            <p class="text-muted my-3">Evitar o desperdício de óleo é crucial para a preservação ambiental</p>
                        </div>
                        <div class="col text-center text-md-start">
                            <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-sun fs-3 text-primary bg-secondary">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                </svg>
                                <h5 class="fw-bold mb-0 ms-2">Sustentável</h5>
                            </div>
                            <p class="text-muted my-3">Projeto amigo do ambiente,&nbsp;ações sustentáveis e conscientes..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-first order-md-last">
                <div></div>
                <lottie-player src="https://lottie.host/4d31dbdb-efbd-4185-acab-14b7a8823d7c/7bkNQjKaRA.json" mode="normal" autoplay="" loop=""></lottie-player>
            </div>
        </div>
    </div>
</section>
<section></section>
<section class="py-4 py-xl-5 mb-5">
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="display-6 fw-bold mb-5"><span class="pb-3 underline">FAQ<br></span></h2>
                <p class="text-muted mb-5">Informações úteis para os visitantes do site interessados na coleta de óleo.</p>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-8 mx-auto">
                <div class="accordion text-muted" role="tablist" id="accordion-1">
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="true" aria-controls="accordion-1 .item-1"><strong>Por que devo reciclar óleo de cozinha usado?</strong></button></h2>
                        <div class="accordion-collapse collapse show item-1" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p>Reciclar o óleo de cozinha usado é essencial para proteger o meio <br>ambiente, evitando a contaminação da água e do solo.&nbsp;</p>
                                <p class="mb-0">Além disso, o óleo pode ser transformado em produtos úteis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false" aria-controls="accordion-1 .item-2">Como posso armazenar o óleo de cozinha usado de forma segura?</button></h2>
                        <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0">Utilize recipientes de vidro ou&nbsp;plásticos para armazenar o óleo de <br>cozinha usado. Certifique-se de que o recipiente seja resistente a <br>vazamentos e esteja devidamente fechado para evitar derramamentos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="false" aria-controls="accordion-1 .item-3"><strong>Onde posso encontrar locais de coleta de óleo de cozinha usado?</strong></button></h2>
                        <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0">A coleta de óleo de cozinha usado é realizada uma vez por semana por <br>nossa equipe, proporcionando conveniência e regularidade.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-4" aria-expanded="false" aria-controls="accordion-1 .item-4"><strong><span style="color: var(--tw-prose-bold);">O serviço de coleta semanal tem algum custo associado?</span></strong></button></h2>
                        <div class="accordion-collapse collapse item-4" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0">No momento, estamos oferecendo o serviço de coleta de óleo de cozinha <br>usado gratuitamente, como parte de nossos esforços para promover <br>práticas sustentáveis e preservar o meio ambiente.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-4 py-xl-5">
    <div class="container">
        <div class="text-white bg-primary border rounded border-0 border-primary d-flex flex-column justify-content-between flex-lg-row p-4 p-md-5" style="background: var(--bs-body-color);--bs-primary: #01713d;--bs-primary-rgb: 1,113,61;">
            <div class="pb-2 pb-lg-1">
                <h2 class="fw-bold text-secondary mb-2">Ainda resta alguma dúvida?</h2>
                <p class="mb-0">Fique à vontade para perguntar. Estamos aqui para ajudar no que for possível.</p>
            </div>
            <div class="my-2"><a class="btn btn-light fs-5 py-2 px-4" role="button" data-bss-hover-animate="bounce" href="contacts.php" style="background: var(--bs-btn-disabled-border-color);"><span style="color: rgb(18, 22, 67);">Entre em Contato</span></a></div>
        </div>
    </div>
</section>
<?php
include_once 'footer.php';
?>