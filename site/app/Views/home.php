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

        <!--hero section start-->
        <section class="hero-section" style="background: url('assets/img/shape/dot-dot-wave-shape.svg')no-repeat bottom center">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-xl-5 col-lg-5">
                        <div class="hero-content-wrap text-center text-xl-start text-lg-start" data-aos="fade-right">
                            <h1 class="fw-bold display-6">SEU REGISTRO PROTOCOLADO
                                NO INPI EM * <span style="background-color: #071C4D; color:white;">48 HORAS</span></h1>
                            <h3>EM 10X SEM JUROS!</h3>
                            <i>* 48 HORAS ÚTEIS</i>
                            <div class="hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-none d-md-block d-lg-block d-xl-block">
                                <a href="registrar-marca" class="btn btn-primary mt-3 mt-lg-0 mt-md-0" style="font-size:25px;">Quero registrar minha marca</a>
                            </div>
                            <div class="hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-block d-md-none d-lg-none d-xl-none">
                                <a href="registrar-marca" class="btn btn-primary mt-3 mt-lg-0 mt-md-0" style="font-size:25px;">Registre sua marca</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 mt-4 mt-xl-0">
                        <div class="hero-img-wrap position-relative" data-aos="fade-left">
                            <!--animated shape start-->
                           <div class="text-center d-flex justify-content-center">
                               <img class="imgmob" src="assets/img/foguete.gif" alt="">
                           </div>
                            <!--animated shape end-->
                            <!-- <div class="hero-img-wrap position-relative">
                                <div class="hero-screen-wrap">
                                    <div class="phone-screen">
                                        <img src="assets/img/screen/phone-screen.png" alt="hero image" class="position-relative img-fluid">
                                    </div>
                                    <div class="mac-screen">
                                        <img src="assets/img/screen/mac-screen.png" alt="hero image" class="position-relative img-fluid rounded-custom">
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--feature section start-->
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
                            <img src="assets/img/feature-img3.jpg" alt="feature image" class="img-fluid rounded-custom">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature section end-->
<section class="hero-section" style="padding-top:12px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="section-heading text-center">
                    <h3 class="h5 text-primary">Registro da marca</h3>
                    <h4>NA SIMPLIX VOCÊ TEM O PEDIDO DE REGISTRO DA SUA MARCA, PROTOCOLADO EM APENAS 3 PASSOS:</h4>
                    <p></p>
                </div>
            </div>
        </div>
        </div>
        <div class="d-flex" style="justify-content:center; align-items: center;">
            <div class="row justify-content-center align-center" style="margin:0;">
                <div class="col-lg-12 d-flex justify-content-center">
                    <img class="imgmob" src="assets/img/passoapasso.gif" alt="">
                </div>
                <div class="col-lg-4 text-center card-passo justify-content-center">
                    <h5>SOLICITE SUA BUSCA PRÉVIA</h5>
                    <p class="text">
                     FAÇA O PEDIDO DE PESQUISA NA PLATAFORMA, CLICANDO EM “QUERO REGISTRAR MINHAMARCA”. VOCÊ VAI RECEBER UM RELATÓRIO POR E-MAIL COM UM PARECER DO NOSSO TIME DEESPECIALISTAS.
                    </p>
                    <h1 style="color: white;">1</h1>
                </div>
                <div class="col-lg-4 text-center card-passo justify-content-center">
                    
                    <div>
                        <h5>FAÇA SEU CADASTRO</h5>
                    </div>
                    <div>
                        <p class="text">
                            PREENCHA ATENTAMENTE O FORMULÁRIO E LEIA OS TERMOS E O CONTRATO.
                        </p>
                    </div>
                    
                    <br>
                    <br>
                    <br>
                    <br>
                    <h1 style="color: white;">2</h1>
                </div>
                <div class="col-lg-4 text-center card-passo">
                    <h5>FORMA DE PAGAMENTO</h5>
                    <p class="text">
                        ESCOLHA A FORMA E AS CONDIÇÕES DE PAGAMENTO. CONFIRME O PAGAMENTO E PRONTO!
                    </p>
                    <br>
                    <br>
                    <br>
                    <h1 class="align-self-end" style="color: white;">3</h1>
                </div>
            </div>
        </div>
</section>
        <!--hero section start-->
        <section class="hero-section pb-5 position-relative overflow-hidden" style="background: url('assets/img/shape/color-particles-2.svg')no-repeat center top">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-9">
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="200">
                            <ul class="position-absolute animate-element parallax-element widget-img-wrap z-2">
                                <li class="layer" data-depth="0.04">
                                    <img src="assets/img/screen/widget-3.png" alt="widget-img" class="img-fluid widget-img-1 position-absolute shadow-lg rounded-custom">
                                </li>
                                <li class="layer" data-depth="0.02">
                                    <img src="assets/img/screen/widget-4.png" alt="widget-img" class="img-fluid widget-img-3 position-absolute shadow-lg rounded-custom">
                                </li>
                            </ul>
                            <img src="assets/img/dashboard-img.png" alt="dashboard image" class="img-fluid position-relative rounded-custom mt-lg-5">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-dark position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z--1 py-5"></div>
        </section>

        <!--top review section start-->
        <section class="customer-review pb-120 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="section-heading text-center">
                        <h2 class="fw-medium h4">Nossa plataforma é exclusiva para que você possa <br> solicitar e acompanhar o registro da sua marca. </h2>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-4 col-md-4">
                        <div class="review-info-wrap text-center rounded-custom d-flex flex-column h-100 p-lg-5 p-4">
                            <div class="review-info-content mt-2">
                                <p class="mb-4">Pesquisa de viabilidade de marca</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-md-4">
                        <div class="review-info-wrap text-center rounded-custom d-flex flex-column h-100 p-lg-5 p-4">
                            <img src="assets/img/g-logo-w.svg" width="130" alt="google" class="img-fluid m-auto">
                            <div class="review-info-content mt-2">
                                <p class="mb-4">Consultoria prévia & completa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="review-info-wrap text-center rounded-custom d-flex flex-column h-100 p-lg-5 p-4">
                            <img src="assets/img/li-logo-w.svg" width="130" alt="linkedIn" class="img-fluid m-auto">
                            <div class="review-info-content mt-2">
                                <p class="mb-4">Atendimento Online e sem burocracia</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--top review section end-->

        <!--pricing section start-->
        <section class="pricing-section pt-60 pb-120  position-relative z-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary">Registro da marca</h4>
                            <h2>Quanto custa para registrar uma marca?</h2>
                            <p>OS VALORES SÃO DE ACORDO COM O ENQUADRAMENTO JURÍDICO DA EMPRESA, CONFORME COMPROVADO PELO CNPJ.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-3">
                        <div class="media d-flex align-items-center py-2 p-sm-2">
                            <div class="icon-box mb-0 bg-primary-soft rounded-circle d-block me-3">
                                <i class="fal fa-credit-card text-primary"></i>
                            </div>
                            <div class="media-body fw-medium h6 mb-0">
                                Sem cartão de crédito
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="media d-flex align-items-center py-2 p-sm-2">
                            <div class="icon-box mb-0 bg-success-soft rounded-circle d-block me-3">
                                <i class="fal fa-calendar-check text-success"></i>
                            </div>
                            <div class="media-body fw-medium h6 mb-0">
                                Registro Único
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="media d-flex align-items-center py-2 p-sm-2">
                            <div class="icon-box mb-0 bg-danger-soft rounded-circle d-block me-3">
                                <i class="fal fa-calendar-times text-danger"></i>
                            </div>
                            <div class="media-body fw-medium h6 mb-0">
                                Sem consulta ao SPC/SERASA
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-primary d-block">Pequeno Porte</h3>
                                <h6 class="">M.E., E.P.P, MEI E PESSOA FÍSICA.</h6>
                                <p>DE R$1.200,00 POR</p>
                                <h2>R$ 800,00*</h2>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> CADASTRO NO INPI</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> PAGAMENTO DA TAXA INICIAL</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> ENTRADA NO PROCESSO
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> ACESSO A PLATAFORMA SIMPLIX</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> SUPORTE POR E-MAIL</li>
                                </ul>
                            </div>
                           

                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 left--40 bottom--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-primary d-block">Grande Porte</h3>
                                <h6 class="">DEMAIS PORTES.</h6>
                                <p>DE R$1.700,00 POR</p>
                                <h2>R$ 1.100,00*
                                </h2>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> CADASTRO NO INPI</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> PAGAMENTO DA TAXA INICIAL</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> ENTRADA NO PROCESSO
                                    </li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> ACESSO A PLATAFORMA SIMPLIX</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> SUPORTE POR E-MAIL</li>
                            </div>
                            
                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 right--40 top--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                    <div class="d-flex col-lg-12 justify-content-center" style="margin-top: 45px;">
                        <div class="row justify-content-center">
                            <h5 class="text-center"><i>* VALORES POR PROCESSO DE PEDIDO DE REGISTRO DE MARCA JUNTO AO INPI.</i></h5>
                            <div class="text-center hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-none d-md-block d-lg-block d-xl-block">
                                <a href="registrar-marca" class="btn btn-primary mt-3 mt-lg-0 mt-md-0" style="font-size:25px;">Quero registrar minha marca</a>
                            </div>
                            <div class="text-center hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-block d-md-none d-lg-none d-xl-none">
                                <a href="registrar-marca" class="btn btn-primary mt-3 mt-lg-0 mt-md-0" style="font-size:25px;">Registre sua marca</a>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing section end-->     

        <!--integration section start-->
        <section class="integration-section  pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary">Marcas</h4>
                            <h2>Algumas empresas que confiaram em nós!</h2>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-12">
                        <div class="text-lg-end mb-5 mb-lg-0">
                            <a href="integrations.html" class="btn btn-primary">View All Integrations</a>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="integration-wrapper position-relative w-100">
                            <ul class="integration-list list-unstyled mb-0">
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/easypet.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Easy Pet</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/fertec.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Fertec</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/lupulino.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Lupulino</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/mitburger.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Mit Burger</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/sabichinhos.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Sabichinhos</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/torre.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Torre Segurança</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/vetvr.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Vet VR</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 justify-content-center d-flex">
                       <img class="imgmob" src="assets/img/negocios.gif" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--integration section end-->

        <!--customer review slider section start-->
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

        <!--customer review slider section end-->
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
                                <a href="duvidas-frequentes" class="btn btn-primary mt-3 mt-lg-0 mt-md-0" style="font-size:25px;">Página de Dúvidas</a>
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
                            <img class="imgmob" src="assets/img/faq.gif" alt="faq" class="img-fluid">
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