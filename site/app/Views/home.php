<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!--twitter og-->
    <meta name="twitter:site" content="@themetags">
    <meta name="twitter:creator" content="@themetags">
    <meta name="twitter:card" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="#">

    <!--facebook og-->
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!--meta-->
    <meta name="description" content="">
    <meta name="author" content="Dec9 Marketing & tecnologia">

    <!--favicon icon-->
    <!-- <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16"> -->

    <!--title-->
    <title>Simplix Marcas</title>

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&amp;family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!--custom css end-->

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
        <header class="main-header w-100">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="/" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="assets/img/logo.png" alt="logo" class="img-fluid logo-color" />
                    </a>
                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                        <span class="far fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"></span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php echo base_url('/'); ?>" role="button" aria-expanded="false">
                                    Home
                                </a>                                
                            </li>
                            <li><a href="<?php echo base_url('quem-somos') ?>" class="nav-link">Quem Somos</a></li>                                
                                <li><a href="<?php echo base_url('preco') ?>" class="nav-link">Preço</a></li>                                
                                <li><a href="<?php echo base_url('blog') ?>" class="nav-link">Blog</a></li>                             
                        </ul>
                    </div>
                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="#" class="btn btn-primary">Registrar Marca</a>
                    </div>
                    <!--offcanvas menu start-->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                        <div class="offcanvas-header d-flex align-items-center mt-4">
                            <a href="<?php echo base_url('/') ?>" class="d-flex align-items-center mb-md-0 text-decoration-none">
                                <img src="assets/img/logo.png" alt="logo" class="img-fluid ps-2" />
                            </a>
                            <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                                <i class="far fa-close"></i>
                            </button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php base_url('/') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Home
                                    </a>                                    
                                </li>
                                <li><a href="<?php echo base_url('quem-somos') ?>" class="nav-link">Quem Somos</a></li>                                
                                <li><a href="<?php echo base_url('preco') ?>" class="nav-link">Preço</a></li>                                
                                <li><a href="<?php echo base_url('blog') ?>" class="nav-link">Blog</a></li>                                
                            </ul>
                            <div class="action-btns mt-4 ps-3">
                                <a href="#" class="btn btn-primary">Registrar Marca</a>
                            </div>
                        </div>
                    </div>
                    <!--offcanvas menu end-->
                </div>
            </nav>
        </header>
        <!--header section end-->

        <!--hero section start-->
        <section class="hero-section ptb-120" style="background: url('assets/img/shape/dot-dot-wave-shape.svg')no-repeat bottom center">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-xl-5 col-lg-5">
                        <div class="hero-content-wrap text-center text-xl-start text-lg-start" data-aos="fade-right">
                            <h1 class="fw-bold display-5">Registro de marca simples e rápido</h1>
                            <p class="lead">Registre sua marca, patentes, direitos autorais e desenho industrial.</p>
                            <div class="hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-none d-md-block d-lg-block d-xl-block">
                                <form id="subscribe-form" name="email-form" class="hero-subscribe-form d-block d-lg-flex d-md-flex">
                                    <input type="email" class="form-control me-2" name="Email" data-name="Email" placeholder="Registrar marca" id="email-address" required="">
                                    <input type="submit" value="Registrar" data-wait="Please wait..." class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form>
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
                            <h4 class="h5 text-primary">Vantagens?</h4>
                            <h2>Solução poderosa para suas necessidades de negócios</h2>
                            <p>Ao registrar uma marca no INPI você diversas vantagens, destacamos algumas:</p>
                            <ul class="list-unstyled mt-5">
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fas fa-bezier-curve text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Credibilidade</h3>
                                        <!-- <p>Credibilidade</p> -->
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-danger rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Investimento Preservado</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-danger rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Divulgação sem medo de ser copiado ou perder a marca</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-danger rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Marca Protegida em qualquer conta do Brasil</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-danger rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Possibilidade de abertura de Franquias.</h3>
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

        <!--cat subscribe start--
        <section class="cta-subscribe bg-dark text-white ptb-120 position-relative overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="subscribe-info-wrap text-center position-relative z-2">
                            <div class="section-heading" data-aos="fade-up">
                                <h4 class="h5 text-warning">Let's Try! Get Free Support</h4>
                                <h2>Start Your 14-Day Free Trial</h2>
                                <p>We can help you to create your dream website for better business revenue.</p>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-5" data-aos="fade-up" data-aos-delay="50">
                                <a href="contact-us.html" class="btn btn-primary">Contact with Us</a>
                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn ms-lg-3 ms-md-3 mt-3 mt-lg-0"> <i class="fas fa-play"></i> Watch Demo </a>
                            </div>
                            <ul class="nav justify-content-center subscribe-feature-list mt-4" data-aos="fade-up" data-aos-delay="100">
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Free 14-day trial</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>No credit card required</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Support 24/7</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Cancel anytime</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
            </div>
        </section>
        <!--cat subscribe end-->

        <!--footer section start-->
        <footer class="footer-section">
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top footer-light ptb-120">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="assets/img/logo-white.png" alt="logo" class="img-fluid logo-white">
                                    <img src="assets/img/logo-color.png" alt="logo" class="img-fluid logo-color">
                                </div>
                                <p>Ea anim culpa incididunt eu laboris ullamco fugiat sunt cillum veniam ad officia.</p>

                                <form class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                    <input type="text" class="input-newsletter form-control me-2" placeholder="Digite o seu melhor email" name="email" required="" autocomplete="off">
                                    <input type="submit" value="Me inscrever" data-wait="Por favor, aguarde..." class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form>
                                <div class="ratting-wrap mt-4">
                                    <h6 class="mb-0">10/10 Avaliação Geral</h6>
                                    <ul class="list-unstyled rating-list list-inline mb-0">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Institucional</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="#" class="text-decoration-none">Home</a></li>
                                            <li><a href="#" class="text-decoration-none">Quem Somos</a></li>
                                            <li><a href="#" class="text-decoration-none">Preço</a></li>
                                            <li><a href="#" class="text-decoration-none">Blog</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Links</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">                                            
                                            <li><a href="#" class="text-decoration-none">Políticas de Privacidade</a>
                                            <li><a href="#" class="text-decoration-none">Termos de usos</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Contato</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="contact-us.html" class="text-decoration-none">Fale Conosco</a></li>
                                            <li><a href="support.html" class="text-decoration-none">Suporte</a></li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom footer-light py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">&copy; 2021 Simplix Marcas - Todos os Direitos Reservados. Desenvolvido por <a href="https://dec9.com.br" target="_blank" class="text-decoration-none"><img src="assets/img/logo-dec9.png" width="40" height="auto" alt=""> </a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer>
        <!--footer section end-->
    </div>

    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendors/parallax.min.js"></script>
    <script src="assets/js/vendors/aos.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
</body>

</html>