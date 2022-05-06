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
        <?php echo view('partials/footer'); ?>
        <!--footer section end-->
    </div>

    <!--build:js-->
    <?php echo view('partials/scripts'); ?>
    <!--endbuild-->
</body>

</html>