<?php
// Obtener la ruta de la URL
$url = strtok($_SERVER["REQUEST_URI"], '?'); // Obtener la URL sin los parámetros GET

// Enrutamiento simple basado en la URL
switch ($url) {
    case '/':
        $page = 'home';
        $title = 'Inicio';
        break;
    case '/login':
        $page = 'login';
        $title = 'Iniciar Sesión';
        break;
    case '/register':
        // Si la URL es /register sin parámetros, se manejará aquí
        $page = 'register';
        $title = 'Registrarse';
        break;
    case '/catalog':
        $page = 'catalog';
        $title = 'Catálogo';
        break;
    default:
        // Manejo de rutas no encontradas
        http_response_code(404);
        echo 'Página no encontrada';
        exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include 'templates/header.php'; ?>
    <?php include 'templates/' . $page . '.php'; ?>
    <?php include 'templates/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>