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

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <title>Ejemplo de Cambio de Idioma con Cookies</title>
    <style>
        /* Estilos para el botón */
        .language-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .language-button:hover {
            background-color: #2980b9;
        }

        /* Estilos para el contenedor */
        .container {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1><?php echo $textoMostrado; ?></h1>
        <a href="?lang=<?php echo ($lang == 'es') ? 'en' : 'es'; ?>" class="language-button"><?php echo $botonMostrado; ?></a>
    </div>
</body>

</html>