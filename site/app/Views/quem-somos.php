<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php echo view('partials/meta-tags'); ?>

    <?php echo view('partials/styles'); ?>
</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="assets/img/logo.png" alt="logo" class="img-fluid preloader-icon" />
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--header section start-->
        <?php echo view('partials/header'); ?>
        <!--header section end-->

        <!--about header section start-->
        <section class="about-header-section position-relative overflow-hidden bg-dark" style="padding-bottom: 280px; padding-top: 60px;" style="background: url('assets/img/page-header-bg.svg')no-repeat center right">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading-wrap d-flex justify-content-between z-5 position-relative">
                            <div class="about-content-left">
                                <div class="about-info mb-5">
                                    <h1 class="fw-bold display-5">Quem Somos</h1>
                                    <p class="lead">A Simplix é uma StartUp que foi criada para ajudar
                                                    os empreendedores a fazerem o registro de sua
                                                    marca junto ao INPI, de forma mais simples e
                                                    desburocratizada, mantendo a qualidade do
                                                    serviço a um preço mais acessível.
                                                    Nós agilizamos o primeiro passo do processo de
                                                    pedido de registro de marca junto ao INPI. Esse
                                                    primeiro passo, é muito burocrático e pode ser de
                                                    difícil compreensão para um leigo, porém é o
                                                    passo mais importante no pedido de registro de
                                                    marca. Ao realizar o depósito do pedido, o mesmo
                                                    deve corresponder exatamente às atividades que
                                                    o cliente deseja e deve proteger, e nós fazemos
                                                    isso de forma mais simples e rápida.</p>
                                    <!-- <a href="career.html" class="btn btn-primary mt-4 me-3">Open Positions</a>
                                    <a href="#our-team" class="btn btn-soft-primary mt-4">Meet Our Team</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                            <div class="col-lg-6 d-flex justify-content-center" style="padding-bottom: px;">
                                <img src="assets/img/foguete2.gif" alt="">
                            </div>
                </div>
            </div>
            <div class="bg-white position-absolute bottom-0 bottom-0 left-0 right-0 z-2 py-5" style="height: 150px ;">
            </div>
        </section>
        <!--about header section end-->

        <section class="feature-section-two" style="margin-top:12px">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-7 col-md-12">
                        <div class="section-heading" data-aos="fade-up">
                            <!--<h4 class="h5 text-primary">Vantagens?</h4>-->
                            <h2>VANTAGENS DE REGISTRAR SUA MARCA COM A SIMPLIX:</h2>
                            <p>Somos uma plataforma especializada em registro de marcas junto ao INPI. Trabalhamos com facilidade, velocidade e segurança para que você tenha a sua marca registrada.</p>
                            <ul class="list-unstyled mt-5">
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fas fa-bezier-curve text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Facilidade</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fa-solid fa-gauge-max text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Rapidez</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fa-solid fa-lock text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Segurança</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fa-solid fa-circle-dollar text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Pagamento Facilitao</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fa-solid fa-xmark text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Sem Burocracia</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Sem consulta ao SPC / Serasa</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fa-solid fa-laptop-mobile text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Acompanhamento pela plataforma</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7">
                        <div class="feature-img-wrap position-relative d-flex flex-column align-items-end">
                            <!-- <ul class="img-overlay-list list-unstyled position-absolute">
                                <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up" data-aos-delay="50">
                                    <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                    <h6 class="mb-0">Create a Free Account</h6>
                                </li>
                                <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up" data-aos-delay="100">
                                    <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                    <h6 class="mb-0">Install Our Tracking Pixel</h6>
                                </li>
                                <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up" data-aos-delay="150">
                                    <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                    <h6 class="mb-0">Start Tracking your Website</h6>
                                </li>
                            </ul> -->
                            <img style="margin-bottom:12px;" src="assets/img/feature-img3.jpg" alt="feature image" class="img-fluid rounded-custom">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature section end-->

       <!--testimonial section start-->
       <section class="testimonial-section bg-dark text-white  ptb-120">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="h5 text-warning text-primary">Depoimentos</h4>
                            <h2>O que nossos clientes acham de nós?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative w-100" data-aos="fade-up" data-aos-delay="50">
                            <div class="swiper-container testimonialSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide p-5 rounded-custom position-relative" style="background-color:white ; color:black;">
                                        <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/thales.png" class="img-fluid me-3 rounded" width="100" alt="user">
                                                <div class="author-info" style="margin-top:12px ;">
                                                    <h6 class="mb-0 pl-2" style="color:black ;">Thales Dias</h6>
                                                    <small>DEC 9 Marketing</small>
                                                    <img style="display:block; margin-left: -8px;" width="40%" src="assets/img/testimonial/5 estrelas.png" alt="">   
                                                </div>
                                        </div>
                                        <blockquote>
                                            <h6 style="color:black ;">A Simplix é simplesmente FANTÁSTICA!</h6>
                                            Já tentei fazer o registro antes sozinho, mas não deu certo. RS. Mas com a Simplix foi fácil e simples, e quando tinha dúvidas, eles me respondiam em pouco tempo pelo e-mail.
                                            A filosofia de trabalho de deixar tudo mais descomplicado ajuda muito na hora de fazer o pedido de registro de marca.
                                            Empresa super moderna e preparada. Confio neles de olhos fechados e indico a todos os meus amigos e clientes.
                                        </blockquote>
                                    </div>
                                    <div class="swiper-slide p-5 rounded-custom position-relative" style="background-color:white ; color:black;">
                                        <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/lia.png" class="img-fluid me-3 rounded" width="100" alt="user">
                                                <div class="author-info" style="margin-top:12px ;">
                                                    <h6 class="mb-0 pl-2" style="color:black ;">Lia Ribeiro</h6>
                                                    <small>Luppulino</small>
                                                    <img style="display:block; margin-left: -8px;" width="40%" src="assets/img/testimonial/5 estrelas.png" alt="">   
                                                </div>
                                        </div>
                                        <blockquote>
                                            <h6 style="color:black ;"> Com certeza quando precisar novamente, vou contratar a Simplix.</h6>
                                            Empresa séria e descomplicada, como tem de ser. Conseguiu executar o serviço muito rápido e depois foi só fazer o acompanhamento, que preferi pagar a parte. O registro da minha marca saiu em menos de um ano e não tive problemas, além disso, foi cobrado um preço justo e honesto, e a forma de pagamento foi um diferencial pra eu poder fechar.
                                        </blockquote>
                                    </div>
                                    <div class="swiper-slide p-5 rounded-custom position-relative" style="background-color:white ; color:black;">
                                        <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/josé.png" class="img-fluid me-3 rounded" width="100" alt="user">
                                                <div class="author-info" style="margin-top:12px ;">
                                                    <h6 class="mb-0 pl-2" style="color:black ;">José Hugo de Camargo</h6>
                                                    <small>Torre Segurança</small>
                                                    <img style="display:block; margin-left: -8px;" width="40%" src="assets/img/testimonial/5 estrelas.png" alt="">   
                                                </div>
                                        </div>
                                        <blockquote>
                                            <h6 style="color:black ;">A experiência de trabalhar com a Simplix foi muito boa, nada a reclamar.
                                            </h6>
                                            Resolvi tudo pelo computador, sem complicação e sem enrolação. Me mandaram a pesquisa, fiz o cadastro, o pagamento e depois só aguardei o registro sair. Realmente bem tranquilo e simples.
Recomendo a todos!

                                        </blockquote>
                                    </div>
                                    <div class="swiper-slide p-5 rounded-custom position-relative" style="background-color:white ; color:black;">
                                        <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/carla.png" class="img-fluid me-3 rounded" width="100" alt="user">
                                                <div class="author-info" style="margin-top:12px ;">
                                                    <h6 class="mb-0 pl-2" style="color:black ;">Carla Souza</h6>
                                                    <small>Easy Pet</small>
                                                    <img style="display:block; margin-left: -8px;" width="40%" src="assets/img/testimonial/5 estrelas.png" alt="">   
                                                </div>
                                        </div>
                                        <blockquote>
                                            <h6 style="color:black ;">Foi super simples e rápido!</h6>
                                            Já tinha feito outro registro com outra empresa, mas ter encontrado a Simplix foi uma surpresa ótima e a forma simples de trabalho me ajudou a ter minha marca registrada, e o melhor, com um valor bem mais em conta.
                                            Indico para todos os empresários, que assim como eu, querem proteger sua marca de forma mais fácil e sem muitos termos técnicos.

                                        </blockquote>
                                    </div>
                                    <div class="swiper-slide p-5 rounded-custom position-relative" style="background-color:white ; color:black;">
                                        <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/bruno.png" class="img-fluid me-3 rounded" width="100" alt="user">
                                                <div class="author-info" style="margin-top:12px ;">
                                                    <h6 class="mb-0 pl-2" style="color:black ;">Bruno Freitas</h6>
                                                    <small>Veterinária Volta Redonda</small>
                                                    <img style="display:block; margin-left: -8px;" width="40%" src="assets/img/testimonial/5 estrelas.png" alt="">   
                                                </div>
                                        </div>
                                        <blockquote>
                                            <h6 style="color:black ;">Recomendo muito a Simplix pra todos que conheço!
                                            </h6>
                                            Tenho minha empresa há muitos anos e diversas empresas já me ligaram oferecendo registro de marcas, algumas até sendo deselegantes e agressivas.  Não tive uma boa experiência anteriormente. 
                                            Mas quando me indicaram a Simplix, arrisquei e finalmente tive uma boa experiência. Foi tudo muito rápido e tive meu pedido feito em menos de 24h.
                                        </blockquote>
                                    </div>
                                    <div class="swiper-slide p-5 rounded-custom position-relative" style="background-color:white ; color:black;">
                                        <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/david.png" class="img-fluid me-3 rounded" width="100" alt="user">
                                                <div class="author-info" style="margin-top:12px ;">
                                                    <h6 class="mb-0 pl-2" style="color:black ;">David Vieira e Rebecca Oliveira
                                                    </h6>
                                                    <small>Mit Burguer</small>
                                                    <img style="display:block; margin-left: -8px;" width="40%" src="assets/img/testimonial/5 estrelas.png" alt="">   
                                                </div>
                                        </div>
                                        <blockquote>
                                            <h6 style="color:black ;">Agradecemos à toda equipe da Simplix por tornar tudo mais rápido e fácil.

                                            </h6>
                                            Quando decidimos registrar nossa marca, procuramos uma empresa que fosse moderna e pra nossa sorte, encontramos a Simplix. Todo o processo foi resolvido digitalmente e bem tranquilo, além de ter um ótimo preço e dividir no cartão.
Nossa marca está registrada no INPI e estamos aliviados, sabendo que a marca MIT BURGUER é realmente nossa. 
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-button-next"></span>
                            <span class="swiper-button-prev"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial section end-->

        <!--faq section start-->
        <section class="faq-section ptb-120 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary">FAQ</h4>
                            <h2>Perguntas Frequentes</h2>                   
                        </div>
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="hero-subscribe-form-wrap d-md-block d-lg-block d-xl-block">
                                <input type="submit" value="Acessar dúvidas" data-wait="Por favor, aguarde..." class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between" style="margin-top:85px;">
                    <div class="col-lg-5 col-12">
                        <div class="faq-wrapper">
                            <div class="faq-item mb-5">
                                <h5><span class="h3 text-primary me-2">1.</span>Por que devo registrar minha marca no INPI?</h5>
                                <p>Só o Registro de Marcas no INPI te dá exclusividade
                                    de uso da sua marca, em todo o Brasil, dentro do seu
                                    ramo de atividade. <a href="">(Ver mais)</a></p>
                            </div>
                            <div class="faq-item mb-5">
                                <h5><span class="h3 text-primary me-2">2.</span>O que é INPI?</h5>
                                <p>O INPI é o Instituto Nacional da Propriedade
                                    Industrial. É uma autarquia Federal que é responsável
                                    por... <a href="">(Ver mais)</a></p>
                            </div>
                            <div class="faq-item">
                                <h5><span class="h3 text-primary me-2">3.</span>O Registro na Junta Comercial protege a minha
                                    marca?</h5>
                                <p>Não! O registro na junta comercial te dá uma
                                    proteção regional, só o registro no INPI vai proteger a
                                    sua marca em todo o Brasil...<a href="">(Ver mais)</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center mt-4 mt-lg-0 mt-md-0">
                            <img src="assets/img/faq.gif" alt="faq" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--faq section end-->

        <!--footer section start-->
        <?php echo view('partials/footer'); ?>
        <!--footer section end-->
    </div>

    <!--build:js-->
    <?php echo view('partials/scripts'); ?>
    <!--endbuild-->
</body>

</html>