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
                        <h1 class="display-5 fw-bold">Preço</h1>
                        <p class="lead"></p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->

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
                        <div class="position-relative single-pricing-wrap rounded-custom custom-shadow p-5 mb-4 mb-lg-0" style="background-color:#071C4D;">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name d-block" style="color:#71C3D1;">Pequeno Porte</h3>
                                <h6 class="" style="color:#71C3D1;">M.E., E.P.P, MEI E PESSOA FÍSICA.</h6>
                                <p style="color:white;">DE R$1.200,00 POR</p>
                                <h2 style="color:#71C3D1;">R$ 800,00*</h2>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li class="text-white"><i class="fas fa-circle fa-2xs text-claro me-2"></i> CADASTRO NO INPI</li>
                                    <li class="text-white"><i class="fas fa-circle fa-2xs text-claro me-2"></i> PAGAMENTO DA TAXA INICIAL</li>
                                    <li class="text-white"><i class="fas fa-circle fa-2xs text-claro me-2"></i> ENTRADA NO PROCESSO
                                    </li>
                                    <li class="text-white"><i class="fas fa-circle fa-2xs text-claro me-2"></i> ACESSO A PLATAFORMA SIMPLIX</li>
                                    <li class="text-white"><i class="fas fa-circle fa-2xs text-claro me-2"></i> SUPORTE POR E-MAIL</li>
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
                        <div class="position-relative single-pricing-wrap rounded-custom  custom-shadow p-5 mb-4 mb-lg-0" style="background-color:#71C3D1;">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-primary d-block">Grande Porte</h3>
                                <h6 class="">DEMAIS PORTES.</h6>
                                <p class="text-white">DE R$1.700,00 POR</p>
                                <h2>R$ 1.100,00*
                                </h2>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li class="text-white"><i class="fas fa-circle fa-2xs text-primary me-2"></i> CADASTRO NO INPI</li>
                                    <li class="text-white"><i class="fas fa-circle fa-2xs text-primary me-2"></i> PAGAMENTO DA TAXA INICIAL</li>
                                    <li class="text-white"><i class="fas fa-circle fa-2xs text-primary me-2"></i> ENTRADA NO PROCESSO
                                    </li>
                                    <li class="text-white"><i class="fas fa-circle fa-2xs text-primary me-2"></i> ACESSO A PLATAFORMA SIMPLIX</li>
                                    <li class="text-white"><i class="fas fa-circle fa-2xs text-primary me-2"></i> SUPORTE POR E-MAIL</li>
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
                                <a href="Registrarmarca" class="btn btn-primary mt-3 mt-lg-0 mt-md-0" style="font-size:25px;">Quero registrar minha marca</a>
                            </div>
                            <div class="text-center hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-block d-md-none d-lg-none d-xl-none">
                                <a href="Registrarmarca" class="btn btn-primary mt-3 mt-lg-0 mt-md-0" style="font-size:25px;">Registre sua marca</a>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing section end-->

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