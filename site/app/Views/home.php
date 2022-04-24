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
        <section class="hero-section ptb-120" style="background: url('assets/img/shape/dot-dot-wave-shape.svg')no-repeat bottom center">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-xl-5 col-lg-5">
                        <div class="hero-content-wrap text-center text-xl-start text-lg-start" data-aos="fade-right">
                            <h1 class="fw-bold display-6">Registro de marca simples e rápido</h1>
                            <p class="lead">Registre sua marca, patentes, direitos autorais e desenho industrial.</p>
                            <div class="hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-none d-md-block d-lg-block d-xl-block">
                                <input type="submit" value="Quero registrar minha marca" data-wait="Por favor, aguarde..." class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-4 mt-xl-0">
                        <div class="hero-img-wrap position-relative" data-aos="fade-left">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element shape-service hide-medium">
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/image-1.svg" alt="shape" class="img-fluid position-absolute color-shape-1">
                                </li>
                                <li class="layer" data-depth="0.02">
                                    <img src="assets/img/color-shape/feature-2.svg" alt="shape" class="img-fluid position-absolute color-shape-2 z-5">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/feature-3.svg" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
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
        <section class="feature-section-two">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5 col-md-12">
                        <div class="section-heading" data-aos="fade-up">
                            <!--<h4 class="h5 text-primary">Vantagens?</h4>-->
                            <h2>Vantagens de registrar sua marca com a Simplix:</h2>
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
                                    <div class="icon-box bg-danger rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Rapidez</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-danger rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Segurança</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-danger rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Pagamento Facilitao</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-danger rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Sem Burocracia</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-danger rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Sem consulta ao SPC / Serasa</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-danger rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Acompanhamento pela plataforma</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
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
                            <p>Commodo adipisicing voluptate consectetur et est laboris aliquip ex exercitation non culpa qui nulla labore.</p>
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
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-primary d-block">Stater</h3>
                                <h4 class="display-6 fw-semi-bold">$25<span>/contrato</span></h4>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                </ul>
                            </div>
                            <a href="request-demo.html" class="btn btn-outline-primary mt-2">Eu quero</a>

                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 left--40 bottom--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative single-pricing-wrap rounded-custom bg-gradient text-white p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-warning d-block">Advanced</h3>
                                <h4 class="display-6 fw-semi-bold">$45<span>/contrato</span></h4>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> Lorem ipsum</li>
                                </ul>
                            </div>
                            <a href="request-demo.html" class="btn btn-primary mt-2">Eu quero</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-primary d-block">Premium</h3>
                                <h4 class="display-6 fw-semi-bold">$75<span>/contrato</span></h4>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsumv</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                    <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Lorem ipsum</li>
                                </ul>
                            </div>
                            <a href="request-demo.html" class="btn btn-outline-primary mt-2">Eu quero</a>

                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 right--40 top--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing section end-->     

        <!--integration section start-->
        <section class="integration-section  pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-heading">
                            <h4 class="h5 text-primary">Marcas</h4>
                            <h2>Empresas que confiaram em nós!</h2>
                            <p>Sint irure labore sunt consequat deserunt ut consequat dolore ea fugiat duis minim ex tempor.</p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-12">
                        <div class="text-lg-end mb-5 mb-lg-0">
                            <a href="integrations.html" class="btn btn-primary">View All Integrations</a>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="integration-wrapper position-relative w-100">
                            <ul class="integration-list list-unstyled mb-0">
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/airbnb.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/figma.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/facebook.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/sales-force.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/atlassian.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/dropbox-2.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/dynamic-365.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/erecruiter.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/evernote.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/google-icon.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/slack.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/google-analytics.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/google-drive.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/hubspot.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/instagram.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/linkedin.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/mailchimp.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <img src="assets/img/integations/marekto.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{Name}</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
                            <h2>Depoimentos</h2>
                            <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets. pontificate alternative architectures whereas iterate.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative w-100" data-aos="fade-up" data-aos-delay="50">
                            <div class="swiper-container testimonialSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide bg-custom-light text-white  p-5 rounded-custom position-relative">
                                        <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                        <div class="d-flex mb-32 align-items-center">
                                            <img src="assets/img/testimonial/1.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                            <div class="author-info">
                                                <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                                <small>Founder and CEO at Amaara Herbs</small>
                                            </div>
                                        </div>
                                        <blockquote>
                                            <h6>The Best Template You Got to Have it!</h6>
                                            Globally network long term high impact schemas cross-media infrastructures rather than ethical core competencies.
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <div class="swiper-slide bg-custom-light text-white  p-5 rounded-custom position-relative">
                                        <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                        <div class="d-flex mb-32 align-items-center">
                                            <img src="assets/img/testimonial/3.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                            <div class="author-info">
                                                <h6 class="mb-0">Oberoi R.</h6>
                                                <small>CEO at Herbs</small>
                                            </div>
                                        </div>
                                        <blockquote>
                                            <h6>Embarrassed by the First Version.</h6>
                                            Dynamically create innovative core competencies with effective best practices promote innovative infrastructures.
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <div class="swiper-slide bg-custom-light text-white  p-5 rounded-custom position-relative">
                                        <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                        <div class="d-flex mb-32 align-items-center">
                                            <img src="assets/img/testimonial/2.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                            <div class="author-info">
                                                <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                                <small>Founder and CEO</small>
                                            </div>
                                        </div>
                                        <blockquote>
                                            <h6>Amazing Quiety template!</h6>
                                            Appropriately negotiate interactive niches rather than parallel strategic theme premium total linkage areas.
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <div class="swiper-slide bg-custom-light text-white  p-5 rounded-custom position-relative">
                                        <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                        <div class="d-flex mb-32 align-items-center">
                                            <img src="assets/img/testimonial/4.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                            <div class="author-info">
                                                <h6 class="mb-0">Joan Dho</h6>
                                                <small>Founder and CTO</small>
                                            </div>
                                        </div>
                                        <blockquote>
                                            <h6>Best Template for SAAS Company!</h6>
                                            Dynamically create innovative core competencies with effective best practices promote innovative infrastructures.
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <div class="swiper-slide bg-custom-light text-white  p-5 rounded-custom position-relative">
                                        <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                        <div class="d-flex mb-32 align-items-center">
                                            <img src="assets/img/testimonial/5.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                            <div class="author-info">
                                                <h6 class="mb-0">Ranu Mondal</h6>
                                                <small>Lead Developer</small>
                                            </div>
                                        </div>
                                        <blockquote>
                                            <h6>It is undeniably good!</h6>
                                            Rapidiously supply client-centric e-markets and maintainable processes progressively extend process-centric portals engineer
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        </ul>
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
                            <p>Conveniently mesh cooperative services via magnetic outsourcing. Dynamically grow value whereas accurate e-commerce vectors. </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5 col-12">
                        <div class="faq-wrapper">
                            <div class="faq-item mb-5">
                                <h5><span class="h3 text-primary me-2">1.</span> O que fazemos?</h5>
                                <p>Progressively e-enable collaborative inexpensive supply chains. Efficiently maintain economically methods of empowerment for synergistic sound scenarios.</p>
                            </div>
                            <div class="faq-item mb-5">
                                <h5><span class="h3 text-primary me-2">2.</span> O que fazemos??</h5>
                                <p>Globally benchmark customized mindshare before clicks-and-mortar partnerships. Efficiently maintain economically sound scenarios and whereas client-based progressively. </p>
                            </div>
                            <div class="faq-item">
                                <h5><span class="h3 text-primary me-2">3.</span> O que fazemos??</h5>
                                <p> Dynamically visualize whereas competitive relationships. Progressively benchmark customized partnerships generate interdependent benefits rather sound scenarios and robust alignments.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center mt-4 mt-lg-0 mt-md-0">
                            <img src="assets/img/faq.svg" alt="faq" class="img-fluid">
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