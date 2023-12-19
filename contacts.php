<?php 
    include_once 'header.php';
?>
<title>Contato - Oleo Limpo</title>
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="display-6 fw-bold mb-4">Tem Uma&nbsp;<span class="underline"><span style="color: rgb(1, 113, 61);">Pergunta</span></span><span style="color: rgb(1, 113, 61);">?</span></h2>
                    <p class="text-muted">Nossa equipe está sempre pronta para ajudar. Envie-nos uma mensagem e entraremos em contato com você em breve.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div>
                        <form class="p-3 p-xl-4" method="post" data-bs-theme="light">
                            <div class="mb-3"><input class="shadow form-control" type="text" id="name-1" name="name" placeholder="Nome"></div>
                            <div class="mb-3"><input class="shadow form-control" type="email" id="email-1" name="email" placeholder="E-mail"></div>
                            <div class="mb-3"><textarea class="shadow form-control" id="message-1" name="message" rows="6" placeholder="Mensagem"></textarea></div>
                            <div><button class="btn btn-primary shadow d-block w-100" type="submit" style="background: rgb(4,112,62);">Enviar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 py-xl-5 mb-5" style="margin-top: -22px;">
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
    <?php 
    include_once 'footer.php';
    ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/startup-modern.js"></script>
</body>

</html>