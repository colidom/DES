<?php

include "./Funciones.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    displayArrayElements($_POST);
    displayDebugInfo($_POST);
}
