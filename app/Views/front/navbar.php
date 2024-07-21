<nav class="navbar navbar-expand-lg bgCustom mb-3">
    <div class="container-fluid">
        <a class="navbar-brand textColor" href="<?= base_url('/') ?>"><img src="<?= base_url('assets/img/logo.ico') ?>" alt="logo" class="navbar-logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link textColor" href="<?= base_url('/quienes_somos') ?>">Quienes somos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link textColor" href="<?= base_url('/acerca_de') ?>">Acerca de</a>
            </li>
            <?php if(session()->get('perfil_id') == '1'):?>
                <a class="nav-link" href="<?= base_url('vista_users') ?>">CRUD Usuarios</a>
            <?php endif;?>
            <li class="nav-item dropdown">
            <?php if(session()->get('logged_in')) : ?>
                <a class="nav-link" href="<?= base_url('logout') ?>">Cerrar sesión</a>
            <?php else : ?>
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sesión 
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('/registro') ?>">Registrarse</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('/login') ?>">Loguearse</a></li>
                </ul>
                </li>
            <?php endif; ?>

        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"><img src="img/busqueda.png" alt=""></button>
        </form>
        </div>
    </div>
</nav>