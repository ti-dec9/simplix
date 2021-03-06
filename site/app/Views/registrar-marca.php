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
                        <h1 class="display-5 fw-bold">Registrar Marca</h1>
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
                            <h2>Faça seu cadastro aqui!</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form class="d-flex justify-content-center flex-column col-lg-4 col-12" action="">
                        <label class="inputform" for="">Nome:</label>
                        <input placeholder="Digite seu nome aqui" class="d-block" type="text">
                        <label class="inputform" for="">Email:</label>
                        <input placeholder="exemplo@exemplo.com" class="d-block" type="email">
                        <label class="inputform" for="">Telefone:</label>
                        <input placeholder="00 00000 0000" class="d-block"type="tel" name="" id="">
                        <label class="inputform" for="">Tipo de Empresa:</label>
                        <select class="d-block" name="" id="">
                            <option value="">Empresa Pequena</option>
                            <option value="">Empresa Grande</option>
                        </select>
                        <label class="inputform" for="">Marca:</label>
                        <input placeholder="Sua marca" type="text">
                        <div class="col-lg-12 d-flex justify-content-center" style="margin-top:32px ;">
                            <div class="hero-subscribe-form-wrap d-md-block d-lg-block d-xl-block">
                                <input type="submit" value="Enviar" data-wait="Por favor, aguarde..." class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--pricing section end-->

        <!--footer section start-->
        <?php echo view('partials/footer'); ?>
        <!--footer section end-->
    </div>

    <!--build:js-->
    <?php echo view('partials/scripts'); ?>
    <!--endbuild-->
</body>

</html>