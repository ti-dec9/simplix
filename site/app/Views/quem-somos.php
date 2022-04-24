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

        <!--about header section start-->
        <section class="about-header-section ptb-120 position-relative overflow-hidden bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat center right">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading-wrap d-flex justify-content-between z-5 position-relative">
                            <div class="about-content-left">
                                <div class="about-info mb-5">
                                    <h1 class="fw-bold display-5">Quem Somos</h1>
                                    <p class="lead">Mollit ex ut consequat sunt dolore aute esse mollit fugiat dolor voluptate eiusmod mollit adipisicing. </p>
                                    <!-- <a href="career.html" class="btn btn-primary mt-4 me-3">Open Positions</a>
                                    <a href="#our-team" class="btn btn-soft-primary mt-4">Meet Our Team</a> -->
                                </div>
                                <img src="assets/img/about-img-1.jpg" alt="about" class="img-fluid about-img-first mt-5 rounded-custom shadow">
                            </div>
                            <div class="about-content-right">
                                <img src="assets/img/about-img-2.jpg" alt="about" class="img-fluid mb-5 rounded-custom shadow">
                                <img src="assets/img/about-img-3.jpg" alt="about" class="rounded-custom about-img-last shadow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z-2 py-5">
            </div>
        </section>
        <!--about header section end-->

        <!--our story section start-->
        <section class="our-story-section pt-60 pb-120" style="background: url('assets/img/shape/dot-dot-wave-shape.svg')no-repeat left bottom">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-md-12 order-lg-1">
                        <div class="section-heading sticky-sidebar">
                            <h4 class="h5 text-primary">Our Story</h4>
                            <h2>A Great Story Starts with a Friendly Team</h2>
                            <p>Globally e-enable principle-centered e-business before dynamic quality vectors cross-media
                                materials before proactive outsourcing leverage other's vertical technology leadership. </p>
                            <div class="mt-4">
                                <h6 class="mb-3">We Are Awarded By-</h6>
                                <img src="assets/img/awards-01.svg" alt="awards" class="me-4 img-fluid">
                                <img src="assets/img/awards-02.svg" alt="awards" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-lg-0">
                        <div class="story-grid-wrapper position-relative">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element shape-service d-none d-lg-block">
                                <li class="layer" data-depth="0.02">
                                    <img src="assets/img/color-shape/image-2.svg" alt="shape" class="img-fluid position-absolute color-shape-2 z-5">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/feature-3.svg" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
                            <!--animated shape end-->
                            <div class="story-grid rounded-custom bg-dark overflow-hidden position-relative">
                                <div class="story-item bg-light border">
                                    <h3 class="display-5 fw-bold mb-1 text-success">550K+</h3>
                                    <h6 class="mb-0">Active Users</h6>
                                </div>
                                <div class="story-item bg-white border">
                                    <h3 class="display-5 fw-bold mb-1 text-primary">250+</h3>
                                    <h6 class="mb-0">Team Members</h6>
                                </div>
                                <div class="story-item bg-white border">
                                    <h3 class="display-5 fw-bold mb-1 text-dark">$20M+</h3>
                                    <h6 class="mb-0">Revenue Per/Year</h6>
                                </div>
                                <div class="story-item bg-light border">
                                    <h3 class="display-5 fw-bold mb-1 text-warning">8 Years</h3>
                                    <h6 class="mb-0">In Business</h6>
                                </div>
                                <div class="story-item bg-light border">
                                    <h3 class="display-5 fw-bold mb-1 text-danger">425+</h3>
                                    <h6 class="mb-0">Clients Worldwide</h6>
                                </div>
                                <div class="story-item bg-white border">
                                    <h3 class="display-5 fw-bold mb-1 text-primary">855+</h3>
                                    <h6 class="mb-0">Projects Completed</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our story section end-->

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

       <!--testimonial section start-->
       <section class="testimonial-section ptb-120">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary">Testimonial</h4>
                            <h2>What They Say About Us</h2>
                            <p>Dynamically initiate market positioning total linkage with clicks-and-mortar technology compelling data for cutting-edge markets.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative w-100">
                            <div class="swiper-container testimonialSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
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
                                            Globally network long-term high-impact schemas vis-a-vis distinctive e-commerce
                                            cross-media infrastructures rather than ethical
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        </ul>
                                        <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                    </div>
                                    <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
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
                                            Dynamically create innovative core competencies with effective best
                                            practices promote innovative infrastructures.
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        </ul>
                                        <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                    </div>
                                    <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
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
                                            Appropriately negotiate interactive niches rather than parallel strategic theme incubate premium total linkage areas.
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        </ul>
                                        <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                    </div>
                                    <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
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
                                            Dynamically create innovative core competencies with effective best
                                            practices promote innovative infrastructures.
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        </ul>
                                        <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                    </div>
                                    <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
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
                                            Rapidiously supply client-centric e-markets and maintainable processes progressively engineer
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        </ul>
                                        <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
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

        <!--cat subscribe start-->
        <section class="cta-subscribe bg-dark ptb-120 position-relative overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="subscribe-info-wrap text-center position-relative z-2">
                            <div class="section-heading">
                                <h4 class="h5 text-warning">Gostou?</h4>
                                <h2>Então registre sua marca!</h2>
                                <p>Ipsum ea enim ex consequat tempor mollit minim.</p>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-5">
                                <a href="contact-us.html" class="btn btn-primary">Registrar Marcar</a>
                            </div>
                            <ul class="nav justify-content-center subscribe-feature-list mt-4">
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Sem Restrições</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Livre de assinatura</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Supporte 24/7</span>
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