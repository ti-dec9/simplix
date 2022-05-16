<header class="main-header w-100">
    <nav class="navbar navbar-expand-xl navbar-light sticky-header">
        <div class="container d-flex align-items-center justify-content-lg-between position-relative">
            <a href="home" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                <img src="assets/img/logo.png" alt="logo" class="logo logo-color" />
            </a>
            <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                <span class="far fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"></span>
            </a>
            <div class="clearfix"></div>
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="home" role="button" aria-expanded="false">
                            Home
                        </a>
                    </li>
                    <li><a href="quem-somos" class="nav-link">Quem Somos</a></li>
                    <li><a href="preco" class="nav-link">Preço</a></li>
                    <li><a href="#" class="nav-link">Blog</a></li>
                </ul>
            </div>
            <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                <a href="Registrarmarca" class="btn btn-primary">Registre sua marca</a>
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
                        <a href="<?php echo base_url('registrar-marca') ?>" class="btn btn-primary">Registrar Marca</a>
                    </div>
                </div>
            </div>
            <!--offcanvas menu end-->
        </div>
    </nav>
</header>