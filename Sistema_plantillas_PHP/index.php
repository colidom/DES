<?php
// Obtener la ruta de la URL
$request = $_SERVER['REQUEST_URI'];

// Enrutamiento simple basado en la URL
switch ($request) {
    case '/':
        $page = 'home';
        break;
    case '/login':
        $page = 'login';
        break;
    case '/register':
        $page = 'register';
        break;
    case '/catalog':
        $page = 'catalog';
        break;
    default:
        // Manejo de rutas no encontradas
        http_response_code(404);
        echo 'Página no encontrada';
        exit();
}

?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <?php include 'templates/header.php'; ?>
    <?php include 'templates/' . $page . '.php'; ?>
    <?php include 'templates/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>