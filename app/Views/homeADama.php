<?= $this->extend('menuADama') ?>
<?= $this->section('conteudo') ?>

<!-- SLIDES DE SERVIÇOS -->
<div id="slides_servicos_adama" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#slides_servicos_adama" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#slides_servicos_adama" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#slides_servicos_adama" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#slides_servicos_adama" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <!-- IMAGENS DO CARROSSEL DE SERVIÇOS -->
    <div class="carousel-inner">
        <div class="carousel-item item_carrossel_adama active">
            <img src="#" class="d-block w-100" alt="Escova">
        </div>
        <div class="carousel-item item_carrossel_adama">
            <img src="#" class="d-block w-100" alt="Cortes">
        </div>
        <div class="carousel-item item_carrossel_adama">
            <img src="#" class="d-block w-100" alt="Tinturas">
        </div>
        <div class="carousel-item item_carrossel_adama">
            <img src="#" class="d-block w-100" alt="Progressiva">
        </div>
    </div>
    <!-- BOTÕES DE AVANÇAR E VOLTAR SERVIÇOS -->
    <button class="carousel-control-prev" type="button" data-bs-target="#slides_servicos_adama" data-bs-slide="prev">
        <span class="carousel-control-prev" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slides_servicos_adama" data-bs-slide="next">
        <span class="carousel-control-next" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- ENTRAR EM CONTATO - WHATSAPP -->
<div class="container_whats_adama">
    <img src="./imagensADama/whats.jpg" alt="IMG Whatsapp" class="bd-placeholder-img img_whats_adama" width="100" height="100" role="img" aria-label="Placeholder: 140x140" focusable="false">
    <rect class="whats_adama" width="100%" height="100%" fill="#777" /></img>
    <h2>Entre em contato</h2>
    <p class="txt_whats_adama">Agende já um horário conosco !!!</p>
    <a class="btn btn_whats_adama" href="#">WHATSAPP &raquo;</a>
</div>

<!-- FEEDBACKS DE CLIENTES -->
<div id="container_feedbacks_adama" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner carrossel_feedback_adama">
        <!-- ITENS DO CARROSSEL DE FEEDBACKS -->
        <div class="carousel-item item_carrossel_adama active">
            <div class="card card_adama">
                <img src="./imagensADama/feedback1.jpg" class="card-img-top img_feedback_adama" alt="Feedback1">
                <div class="card-body div_texto_adama">
                    <p class="card-text cliente_feedback_adama"> Cliente <cite title="Source Title">Gesiane Carriel</cite> </p>
                </div>
            </div>
        </div>
        <div class="carousel-item item_carrossel_adama">
            <div class="card card_adama">
                <img src="./imagensADama/feedback2.jpg" class="card-img-top img_feedback_adama" alt="Feedback2">
                <div class="card-body div_texto_adama">
                    <p class="card-text cliente_feedback_adama"> Cliente <cite title="Source Title">Isabelly Lima</cite> </p>
                </div>
            </div>
        </div>
        <div class="carousel-item item_carrossel_adama">
            <div class="card card_adama">
                <img src="./imagensADama/feedback3.jpg" class="card-img-top img_feedback_adama" alt="Feedback3">
                <div class="card-body div_texto_adama">
                    <p class="card-text cliente_feedback_adama"> Cliente <cite title="Source Title">Yara Gomes</cite> </p>
                </div>
            </div>
        </div>
    </div>
    <!-- BOTÕES DE AVANÇAR E VOLTAR FEEDBACKS -->
    <button class="carousel-control-prev btn_setas" type="button" data-bs-target="#container_feedbacks_adama" data-bs-slide="prev">
        <span class="setas_adama" aria-hidden="true">&#11164;</span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next btn_setas" type="button" data-bs-target="#container_feedbacks_adama" data-bs-slide="next">
        <span class="setas_adama" aria-hidden="true">&#11166;</span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<?= $this->endSection() ?>