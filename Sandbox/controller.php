<?php

include "./Funciones.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    displayDebugInfo($_POST, "SUPERGLOBAL POST");
}
