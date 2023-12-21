<?php
// Verificar si se ha enviado una solicitud para cambiar el idioma
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    // Establecer la cookie con el idioma seleccionado
    setcookie('idioma', $lang, time() + (86400 * 30), "/"); // Cookie válida por 30 días
} else {
    // Si no se ha enviado solicitud, verificar si la cookie está establecida
    $lang = isset($_COOKIE['idioma']) ? $_COOKIE['idioma'] : 'es'; // Por defecto, idioma español
}

// Definir los textos en español e inglés
$textos = [
    'es' => '¡Hola! Esto está en español.',
    'en' => 'Hello! This is in English.'
];

// Definir los textos del botón en español e inglés
$textoBoton = [
    'es' => 'Cambiar a Inglés',
    'en' => 'Change to Spanish'
];

// Obtener el texto y el texto del botón según el idioma seleccionado
$textoMostrado = $textos[$lang];
$botonMostrado = $textoBoton[$lang];
?>

</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Multilingual</title>
</head>
<body>
    <div class="container text-center mt-5">
        <h1><?php echo $textoMostrado; ?></h1>
        <a href="?lang=<?php echo ($lang == 'es') ? 'en' : 'es'; ?>" class="btn btn-primary"><?php echo $botonMostrado; ?></a>
    </div>
</body>
</html>