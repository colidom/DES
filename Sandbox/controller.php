<?php

include "./Funciones.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $checkMeOut = $_POST['checkMeOut'];

    // Hashear la contraseña
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $data = [
        'email' => $email,
        'password' => $hashedPassword,
        'checkMeOut' => $checkMeOut
    ];

    // Mostrar información para depuración
    displayDebugInfo($data, "data");
}
