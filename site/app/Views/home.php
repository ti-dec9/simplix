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
        <section class="hero-section" style="background: url('assets/img/shape/dot-dot-wave-shape.svg')no-repeat bottom center; margin-top: 56px; margin-bottom: 150px;">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-xl-5 col-lg-5">
                        <div class="text-center hero-content-wrap text-xl-start text-lg-start" data-aos="fade-right">
                            <h1 class="fw-bold display-7">SEU REGISTRO PROTOCOLADO
                                NO INPI EM <span style="background-color: #071C4D; color:white; padding:2px;">48 HORAS *</span></h1>
                            <h3>EM 10X SEM JUROS!</h3>
                            <i>* 48 HORAS ÚTEIS</i>
                            <div class="pt-4 m-auto hero-subscribe-form-wrap position-relative m-xl-0 d-none d-md-block d-lg-block d-xl-block">
                                <a href="Registrarmarca" class="mt-3 btn btn-primary mt-lg-0 mt-md-0" style="font-size:25px;">Quero registrar minha marca</a>
                            </div>
                            <div class="pt-4 m-auto hero-subscribe-form-wrap position-relative m-xl-0 d-block d-md-none d-lg-none d-xl-none">
                                <a href="Registrarmarca" class="mt-3 btn btn-primary mt-lg-0 mt-md-0" style="font-size:25px;">Registre sua marca</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 col-xl-5 col-lg-5 mt-xl-0">
                        <div class="hero-img-wrap position-relative" data-aos="fade-left">
                            <!--animated shape start-->
                           <div class=" d-flex justify-content-center">
                              
                             <img class="img-fluid" style="width: 300px; height: 300px;" src="assets/img/simplix.gif" alt="">
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
                            <ul class="mt-5 list-unstyled">
                                <li class="d-flex align-items-start">
                                    <div class="rounded icon-box bg-primary me-4">
                                        <i class="text-white fas fa-bezier-curve"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Facilidade</h3>
                                    </div>
                                </li>
                                <li class=" d-flex align-items-start">
                                    <div class="rounded icon-box bg-primary me-4">
                                        <i class="text-white fa-solid fa-gauge-max"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Rapidez</h3>
                                    </div>
                                </li>
                                <li class=" d-flex align-items-start">
                                    <div class="rounded icon-box bg-primary me-4">
                                        <i class="text-white fa-solid fa-lock"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Segurança</h3>
                                    </div>
                                </li>
                                <li class=" d-flex align-items-start">
                                    <div class="rounded icon-box bg-primary me-4">
                                        <i class="text-white fa-solid fa-circle-dollar"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Pagamento Facilitado</h3>
                                    </div>
                                </li>
                                <li class=" d-flex align-items-start">
                                    <div class="rounded icon-box bg-primary me-4">
                                        <i class="text-white fa-solid fa-xmark"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Sem Burocracia</h3>
                                    </div>
                                </li>
                                <li class=" d-flex align-items-start">
                                    <div class="rounded icon-box bg-primary me-4">
                                        <i class="text-white fas fa-fingerprint"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Sem consulta ao SPC / Serasa</h3>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start">
                                    <div class="rounded icon-box bg-primary me-4">
                                        <i class="text-white fa-solid fa-laptop-mobile"></i>
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
                                <li class="p-3 bg-white rounded shadow-sm d-flex align-items-center" data-aos="fade-up" data-aos-delay="50">
                                    <i class="text-white fas fa-check bg-primary rounded-circle"></i>
                                    <h6 class="mb-0">Create a Free Account</h6>
                                </li>
                                <li class="p-3 bg-white rounded shadow-sm d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
                                    <i class="text-white fas fa-check bg-primary rounded-circle"></i>
                                    <h6 class="mb-0">Install Our Tracking Pixel</h6>
                                </li>
                                <li class="p-3 bg-white rounded shadow-sm d-flex align-items-center" data-aos="fade-up" data-aos-delay="150">
                                    <i class="text-white fas fa-check bg-primary rounded-circle"></i>
                                    <h6 class="mb-0">Start Tracking your Website</h6>
                                </li>
                            </ul> -->
                            <div class="text-center d-flex justify-content-center" style="margin:auto ;">
                                <img src="assets/img/typing.gif" alt="feature image" class="img-fluid rounded-custom">
                            </div>
                            
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
                <div class="text-center section-heading">
                    <h3 class="h5 text-primary">Registro da marca</h3>
                    <h4>NA SIMPLIX VOCÊ TEM O PEDIDO DE REGISTRO DA SUA MARCA, PROTOCOLADO EM APENAS 3 PASSOS:</h4>
                    <p></p>
                </div>
            </div>
        </div>
        </div>
        <div class="container-fluid d-none d-lg-block d-xl-block">
        <div class="d-flex flex-column" style="justify-content:center; align-items: center;">
            <div class="col-lg-12 d-flex justify-content-center">
                <img class="imgmob" src="assets/img/passoapasso.gif" alt="">
            </div>
            <div class="row justify-content-center align-center" style="margin:30px 0;">
               <div class="d-flex col-8" style="height:10rem; width:900px;">
                <!--Numeração-->
                   <div class="cardinicio" style="padding: 34px;">
                       <h1 class="text-center"> Passo 01</h1>
                   </div>
                   <!--Conteúdo do Card-->
                    <div class="cardtexto">
                        <div>
                            <h5><b>SOLICITE SUA BUSCA PRÉVIA</b></h5>
                            <p class="text">
                                FAÇA O PEDIDO DE PESQUISA NA PLATAFORMA, CLICANDO EM <b> “QUERO REGISTRAR MINHA MARCA”</b>. VOCÊ VAI RECEBER UM RELATÓRIO POR E-MAIL COM UM PARECER DO NOSSO TIME DE ESPECIALISTAS.
                            </p>
                       </div>
                       </div>
                       <!--Ícone-->
                        <div class="cardicone">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:#071C4D; width: 60px; height:60px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                              </svg>
                        </div>
               </div>
            </div>
            <div class="row justify-content-center align-center" style="margin:30px 0;">
                <div class="d-flex col-lg-8" style="height:10rem; min-width:900px;">
                 <!--Numeração-->
                    <div class="cardinicio" style="padding: 20px;">
                        <h1 class="text-center"> Passo 02</h1>
                    </div>
                    <!--Conteúdo do Card-->
                     <div class="cardtexto">
                         <div>
                             <h5><b>FAÇA SEU CADASTRO</b></h5>
                             <p class="text">
                                PREENCHA ATENTAMENTE O FORMULÁRIO E LEIA OS TERMOS E O CONTRATO.
                             </p>
                        </div>
                        </div>
                        <!--Ícone-->
                         <div class="cardicone">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:#071C4D; width: 60px; height:60px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                              </svg>
                         </div>
                </div>
             </div>
             <div class="row justify-content-center align-center" style="margin:30px 0;">
                <div class="d-flex col-lg-8" style="height:10rem; width:900px;">
                 <!--Numeração-->
                    <div class="cardinicio">
                        <h1 class="text-center">Passo 03</h1>
                    </div>
                    <!--Conteúdo do Card-->
                     <div class="cardtexto">
                         <div>
                             <h5><b>FORMA DE PAGAMENTO</b></h5>
                             <p class="text">
                                ESCOLHA A FORMA E AS CONDIÇÕES DE PAGAMENTO. CONFIRME O PAGAMENTO E PRONTO!
                             </p>
                        </div>
                        </div>
                        <!--Ícone-->
                         <div class="cardicone">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:#071C4D; width: 60px; height:60px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                         </div>
                </div>
             </div>
               </div>
            </div>

            <div class="container-fluid d-lg-none">
                <div class="text-center row justify-content-center" style="margin-top: 32px;">    
                    <div class="col-12">
                        <div class="cardinicio_mob">
                            <h1>Passo 01</h1>
                        </div>
                        <div class="cardtexto_mob">
                            <div>
                                <h5><b>SOLICITE SUA BUSCA PRÉVIA</b></h5>
                                <p class="text">
                                    FAÇA O PEDIDO DE PESQUISA NA PLATAFORMA, CLICANDO EM <b> “QUERO REGISTRAR MINHA MARCA”</b>. VOCÊ VAI RECEBER UM RELATÓRIO POR E-MAIL COM UM PARECER DO NOSSO TIME DE ESPECIALISTAS.
                                </p>
                           </div>
                           </div>
                           <div class="cardicone_mob">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:#071C4D; width: 60px; height:60px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                              </svg>
                         </div>
                    </div>
                </div>
                <div class="text-center row justify-content-center" style="margin-top: 32px;">    
                    <div class="col-12">
                        <div class="cardinicio_mob">
                            <h1>Passo 02</h1>
                        </div>
                        <div class="cardtexto_mob">
                            <div>
                                <h5><b>FAÇA SEU CADASTRO</b></h5>
                                <p class="text">
                                    PREENCHA ATENTAMENTE O FORMULÁRIO E LEIA OS TERMOS E O CONTRATO.
                                </p>
                           </div>
                           </div>
                           <div class="cardicone_mob">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:#071C4D; width: 60px; height:60px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                              </svg>
                         </div>
                    </div>
                </div>
                <div class="text-center row justify-content-center" style="margin-top: 32px;">    
                    <div class="col-12">
                        <div class="cardinicio_mob">
                            <h1>Passo 03</h1>
                        </div>
                        <div class="cardtexto_mob">
                            <div>
                                <h5><b>FORMA DE PAGAMENTO</b></h5>
                                <p class="text">
                                   ESCOLHA A FORMA E AS CONDIÇÕES DE PAGAMENTO. CONFIRME O PAGAMENTO E PRONTO!
                                </p>
                           </div>
                           </div>
                           <div class="cardicone_mob">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:#071C4D; width: 60px; height:60px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                         </div>
                    </div>
                </div>
            </div>
</section>
        <!--hero section start-->
        <section class="pb-5 overflow-hidden hero-section position-relative" style="background: url('assets/img/shape/color-particles-2.svg')no-repeat center top; margin-top:54px;">
            <div class="container">
                <div class="text-center row justify-content-center">
                    <div class="col-lg-9">
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="200">
                            <ul class="position-absolute animate-element parallax-element widget-img-wrap z-2">
                                <li class="layer" data-depth="0.04">
                                    <img src="assets/img/screen/widget-3.png" alt="widget-img" class="shadow-lg img-fluid widget-img-1 position-absolute rounded-custom">
                                </li>
                                <li class="layer" data-depth="0.02">
                                    <img src="assets/img/screen/widget-4.png" alt="widget-img" class="shadow-lg img-fluid widget-img-3 position-absolute rounded-custom">
                                </li>
                            </ul>
                            <img src="assets/img/dashboard-img.png" alt="dashboard image" class="img-fluid position-relative rounded-custom mt-lg-5">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-0 left-0 right-0 py-5 bg-dark position-absolute h-25 z--1"></div>
        </section>

        <!--top review section start-->
        <section class="customer-review pb-120 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="text-center section-heading">
                        <h2 class="fw-medium h4">Nossa plataforma é exclusiva para que você possa <br> solicitar e acompanhar o registro da sua marca. </h2>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-4 col-md-4">
                        <div class="p-4 text-center review-info-wrap rounded-custom d-flex flex-column h-100 p-lg-5">
                            <div class="mt-2 review-info-content">
                                <p class="mb-4">Pesquisa de viabilidade de marca</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-md-4">
                        <div class="p-4 text-center review-info-wrap rounded-custom d-flex flex-column h-100 p-lg-5">
                            <img src="assets/img/g-logo-w.svg" width="130" alt="google" class="m-auto img-fluid">
                            <div class="mt-2 review-info-content">
                                <p class="mb-4">Consultoria prévia & completa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="p-4 text-center review-info-wrap rounded-custom d-flex flex-column h-100 p-lg-5">
                            <img src="assets/img/li-logo-w.svg" width="130" alt="linkedIn" class="m-auto img-fluid">
                            <div class="mt-2 review-info-content">
                                <p class="mb-4">Atendimento Online e sem burocracia</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--top review section end-->

        <!--pricing section start-->
        <section class="pricing-section pt-60 pb-120 position-relative z-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="text-center section-heading">
                            <h4 class="h5 text-primary">Registro da marca</h4>
                            <h2>Quanto custa para registrar uma marca?</h2>
                            <p>OS VALORES SÃO DE ACORDO COM O ENQUADRAMENTO JURÍDICO DA EMPRESA, CONFORME COMPROVADO PELO CNPJ.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-5 row justify-content-center">
                    <div class="col-lg-3">
                        <div class="py-2 media d-flex align-items-center p-sm-2">
                            <div class="mb-0 icon-box bg-primary-soft rounded-circle d-block me-3">
                                <i class="fal fa-credit-card text-primary"></i>
                            </div>
                            <div class="mb-0 media-body fw-medium h6">
                                Pagamento facilitado
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="py-2 media d-flex align-items-center p-sm-2">
                            <div class="mb-0 icon-box bg-success-soft rounded-circle d-block me-3">
                                <i class="fal fa-calendar-check text-success"></i>
                            </div>
                            <div class="mb-0 media-body fw-medium h6">
                                Registro Único
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="py-2 media d-flex align-items-center p-sm-2">
                            <div class="mb-0 icon-box bg-danger-soft rounded-circle d-block me-3">
                                <i class="fal fa-calendar-times text-danger"></i>
                            </div>
                            <div class="mb-0 media-body fw-medium h6">
                                Sem consulta ao SPC/SERASA
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="p-5 mb-4 position-relative single-pricing-wrap rounded-custom custom-shadow mb-lg-0" style="background-color:#071C4D;">
                            <div class="mb-32 pricing-header">
                                <h3 class="package-name d-block" style="color:#71C3D1;">Pequeno Porte</h3>
                                <h6 class="" style="color:#71C3D1;">M.E., E.P.P, MEI E PESSOA FÍSICA.</h6>
                                <p style="color:white;">DE R$1.200,00 POR</p>
                                <h2 style="color:#71C3D1;">R$ 800,00*</h2>
                            </div>
                            <div class="mb-4 pricing-info">
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
                        <div class="p-5 mb-4 position-relative single-pricing-wrap rounded-custom custom-shadow mb-lg-0" style="background-color:#71C3D1;">
                            <div class="mb-32 pricing-header">
                                <h3 class="package-name text-primary d-block">Grande Porte</h3>
                                <h6 class="">DEMAIS PORTES.</h6>
                                <p class="text-white">DE R$1.700,00 POR</p>
                                <h2>R$ 1.100,00*
                                </h2>
                            </div>
                            <div class="mb-4 pricing-info">
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
                            <div class="pt-4 m-auto text-center hero-subscribe-form-wrap position-relative m-xl-0 d-none d-md-block d-lg-block d-xl-block">
                                <a href="Registrarmarca" class="mt-3 btn btn-primary mt-lg-0 mt-md-0" style="font-size:25px;">Quero registrar minha marca</a>
                            </div>
                            <div class="pt-4 m-auto text-center hero-subscribe-form-wrap position-relative m-xl-0 d-block d-md-none d-lg-none d-xl-none">
                                <a href="Registrarmarca" class="mt-3 btn btn-primary mt-lg-0 mt-md-0" style="font-size:25px;">Registre sua marca</a>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing section end-->     

        <!--integration section start-->
        <section class="integration-section pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="text-center section-heading">
                            <h4 class="h5 text-primary">Marcas</h4>
                            <h2>Algumas empresas que confiaram em nós!</h2>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-12">
                        <div class="mb-5 text-lg-end mb-lg-0">
                            <a href="integrations.html" class="btn btn-primary">View All Integrations</a>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="integration-wrapper position-relative w-100">
                            <ul class="mb-0 integration-list list-unstyled">
                                <li>
                                    <div class="single-integration">
                                        <a href="https://www.instagram.com/easyconveniopet/" style="text-decoration: none;">
                                        <img src="assets/img/integations/easypet.png" alt="integration" class="img-fluid">
                                        <h6 class="mt-4 mb-0">Easy Pet</h6>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <a href="https://www.instagram.com/fertec_seguranca/" style="text-decoration: none;">
                                        <img src="assets/img/integations/fertec.png" alt="integration" class="img-fluid">
                                        <h6 class="mt-4 mb-0">Fertec</h6>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <a href="https://www.facebook.com/lupulino.chopp/" style="text-decoration: none;">
                                        <img src="assets/img/integations/lupulino.png" alt="integration" class="img-fluid">
                                        <h6 class="mt-4 mb-0">Lupulino</h6>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <a href="https://www.instagram.com/burguermit/" style="text-decoration: none;">
                                        <img src="assets/img/integations/mitburger.png" alt="integration" class="img-fluid">
                                        <h6 class="mt-4 mb-0">Mit Burger</h6>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <a href="https://www.facebook.com/sabichinhospet/" style="text-decoration: none;">
                                        <img src="assets/img/integations/sabichinhos.png" alt="integration" class="img-fluid">
                                        <h6 class="mt-4 mb-0">Sabichinhos</h6>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <a href="https://torreseguranca.com.br" style="text-decoration: none;">
                                        <img src="assets/img/integations/torre.png" alt="integration" class="img-fluid">
                                        <h6 class="mt-4 mb-0">Torre Segurança</h6>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <a href="https://www.veterinariavr.com.br" style="text-decoration: none;">
                                            <img src="assets/img/integations/vetvr.png" alt="integration" class="img-fluid">
                                            <h6 class="mt-4 mb-0">Vet VR</h6>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration">
                                        <a href="https://dec9.com.br" style="text-decoration: none;">
                                            <img src="assets/img/integations/dec9.png" alt="integration" class="img-fluid">
                                            <h6 class="mt-4 mb-0">DEC9</h6>
                                        </a>
                                    </div>
                                </li>                             
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 justify-content-center d-flex">
                       <img class="imgmob" src="assets/img/marcas.gif" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--integration section end-->

        <!--customer review slider section start-->
        <section class="text-white testimonial-section bg-dark ptb-120">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="text-center section-heading" data-aos="fade-up">
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
                                    <div class="p-5 swiper-slide rounded-custom position-relative" style="background-color:white ; color:black;">
                                        <div class="mb-32 d-flex align-items-center">
                                                <img src="assets/img/testimonial/thales.png" class="rounded img-fluid me-3" width="100" alt="user">
                                                <div class="author-info" style="margin-top:12px ;">
                                                    <h6 class="pl-2 mb-0" style="color:black ;">Thales Dias</h6>
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
                                    <div class="p-5 swiper-slide rounded-custom position-relative" style="background-color:white ; color:black;">
                                        <div class="mb-32 d-flex align-items-center">
                                                <img src="assets/img/testimonial/lia.png" class="rounded img-fluid me-3" width="100" alt="user">
                                                <div class="author-info" style="margin-top:12px ;">
                                                    <h6 class="pl-2 mb-0" style="color:black ;">Lia Ribeiro</h6>
                                                    <small>Lupulino</small>
                                                    <img style="display:block; margin-left: -8px;" width="40%" src="assets/img/testimonial/5 estrelas.png" alt="">   
                                                </div>
                                        </div>
                                        <blockquote>
                                            <h6 style="color:black ;"> Com certeza quando precisar novamente, vou contratar a Simplix.</h6>
                                            Empresa séria e descomplicada, como tem de ser. Conseguiu executar o serviço muito rápido e depois foi só fazer o acompanhamento, que preferi pagar a parte. O registro da minha marca saiu em menos de um ano e não tive problemas, além disso, foi cobrado um preço justo e honesto, e a forma de pagamento foi um diferencial pra eu poder fechar.
                                        </blockquote>
                                    </div>
                                    <div class="p-5 swiper-slide rounded-custom position-relative" style="background-color:white ; color:black;">
                                        <div class="mb-32 d-flex align-items-center">
                                                <img src="assets/img/testimonial/jose.png" class="rounded img-fluid me-3" width="100" alt="user">
                                                <div class="author-info" style="margin-top:12px ;">
                                                    <h6 class="pl-2 mb-0" style="color:black ;">José Hugo de Camargo</h6>
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
                                    <div class="p-5 swiper-slide rounded-custom position-relative" style="background-color:white ; color:black;">
                                        <div class="mb-32 d-flex align-items-center">
                                                <img src="assets/img/testimonial/carla.png" class="rounded img-fluid me-3" width="100" alt="user">
                                                <div class="author-info" style="margin-top:12px ;">
                                                    <h6 class="pl-2 mb-0" style="color:black ;">Carla Souza</h6>
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
                                    <div class="p-5 swiper-slide rounded-custom position-relative" style="background-color:white ; color:black;">
                                        <div class="mb-32 d-flex align-items-center">
                                                <img src="assets/img/testimonial/bruno.png" class="rounded img-fluid me-3" width="100" alt="user">
                                                <div class="author-info" style="margin-top:12px ;">
                                                    <h6 class="pl-2 mb-0" style="color:black ;">Bruno Freitas</h6>
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
                                    <div class="p-5 swiper-slide rounded-custom position-relative" style="background-color:white ; color:black;">
                                        <div class="mb-32 d-flex align-items-center">
                                                <img src="assets/img/testimonial/david.png" class="rounded img-fluid me-3" width="100" alt="user">
                                                <div class="author-info" style="margin-top:12px ;">
                                                    <h6 class="pl-2 mb-0" style="color:black ;">David Vieira e Rebecca Oliveira
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
                        <div class="text-center section-heading">
                            <h4 class="h5 text-primary">FAQ</h4>
                            <h2>Perguntas Frequentes</h2>                   
                        </div>
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="hero-subscribe-form-wrap d-md-block d-lg-block d-xl-block">
                                <a href="Duvidasfrequentes" class="mt-3 btn btn-primary mt-lg-0 mt-md-0" style="font-size:25px;">Página de Dúvidas</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between" style="margin-top:85px;">
                    <div class="col-lg-5 col-12">
                        <div class="faq-wrapper">
                            <div class="mb-5 faq-item">
                                <h5><span class="h3 text-primary me-2">1.</span>Por que devo registrar minha marca no INPI?</h5>
                                <p>Só o Registro de Marcas no INPI te dá exclusividade
                                    de uso da sua marca, em todo o Brasil, dentro do seu
                                    ramo de atividade. <a href="">(Ver mais)</a></p>
                            </div>
                            <div class="mb-5 faq-item">
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
                        <div class="mt-4 text-center mt-lg-0 mt-md-0">
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