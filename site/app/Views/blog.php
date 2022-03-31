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

       <!--page header section start-->
       <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat center bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-heading text-center">
                            <h1 class="display-5 fw-bold">Blog</h1>
                            <p class="lead mb-0">Proident nisi do id pariatur proident consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8">
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Marketing</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Sales</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Design</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Development</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Product Design</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Customers</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Agency</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Investors</a>
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Research</a>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->

        <!--blog section start-->
        <section class="masonary-blog-section ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="single-article feature-article rounded-custom my-3">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-10.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-primary-soft">Marketing</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Why product managers must be strategic about chasing new trends</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/1.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Donna Martin</h6>
                                            <span class="small fw-medium text-muted">Abril 24, 2022</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="single-article feature-article rounded-custom my-3">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-11.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-danger-soft">Development</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Two tried-and-true frameworks for achieving product/market fit</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/4.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Donna Martin</h6>
                                            <span class="small fw-medium text-muted">Abril 24, 2022</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">Design</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Do you really understand the concept of product value?</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/6.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Jane Martin</h6>
                                            <span class="small fw-medium text-muted">Abril 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-2.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-primary-soft">Customer</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Why communities help you build better products for your business</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/1.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Veronica P. Byrd</h6>
                                            <span class="small fw-medium text-muted">Abril 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-3.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-danger-soft">Development</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Why communities help you build better products</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/3.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Martin Gilbert</h6>
                                            <span class="small fw-medium text-muted">Abril 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-4.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-primary-soft">Marketing</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">The role of product ops in successful distributed teams</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/4.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Raymond H. Martin</h6>
                                            <span class="small fw-medium text-muted">Mai 4, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-5.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">UI/UX</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">The modern product manager’s tech stack</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/5.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Luthar Martin</h6>
                                            <span class="small fw-medium text-muted">Jan 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-6.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-danger-soft">Management</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">30 product management thought leaders to follow</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/6.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Donna Martin</h6>
                                            <span class="small fw-medium text-muted">Abril 24, 2022</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-7.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-danger-soft">Design</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">New analyst report: Digital product management tools and tech</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/1.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Donna R. Book</h6>
                                            <span class="small fw-medium text-muted">Abril 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-8.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-primary-soft">Development</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">A frank discussion about diversity, inclusion, and allyship</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/3.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Donna R. Martin</h6>
                                            <span class="small fw-medium text-muted">Abril 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-9.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">Design</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">4 steps for measuring the impact of product discovery</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/2.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Martin Luthar</h6>
                                            <span class="small fw-medium text-muted">Abril 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <!--pagination start-->
                <div class="row justify-content-center align-items-center mt-5">
                    <div class="col-auto my-1">
                        <a href="#" class="btn btn-soft-primary btn-sm">Voltar</a>
                    </div>
                    <div class="col-auto my-1">
                        <nav>
                            <ul class="pagination rounded mb-0">
                                <li class="page-item"><a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto my-1">
                        <a href="#" class="btn btn-soft-primary btn-sm">Avançar</a>
                    </div>
                </div>
                <!--pagination end-->
            </div>
        </section>
        <!--blog section end-->

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