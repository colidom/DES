<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Aplicación</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page === 'home' ? 'active' : ''; ?>" href="index.php?page=home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page === 'login' ? 'active' : ''; ?>" href="index.php?page=login">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page === 'register' ? 'active' : ''; ?>" href="index.php?page=register">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page === 'catalog' ? 'active' : ''; ?>" href="index.php?page=catalog">Catálogo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>