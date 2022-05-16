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
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h1 class="display-5 fw-bold">Dúvidas Frequentes</h1>
                        <p class="lead"></p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->

        <section class="faq-section pb-5 bg-light">
            <div class="container">                
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
        
        <!--cat subscribe start-->
        <section class="cta-subscribe bg-dark ptb-120 position-relative overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="subscribe-info-wrap text-center position-relative z-2">
                            <div class="section-heading">
                                <h4 class="h5 text-warning">Gostou?</h4>
                                <h2>Então registre sua marca!</h2>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-5">
                                <a href="Registrarmarca" class="btn btn-primary">Registrar Marca</a>
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