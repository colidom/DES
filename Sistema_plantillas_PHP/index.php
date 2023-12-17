<?php
// Definir las variables
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$title = "Título de la Página";

// Luego, incluir el código HTML
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <?php include 'templates/header.php'; ?>
    <?php include 'templates/' . $page . '.php'; ?>
    <?php include 'templates/footer.php'; ?>

    <!-- Bootstrap JS (si es necesario) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>