<?php

require_once "Restaurante.php";
require_once "bootstrap.php";

$re = $entityManager->find("Restaurante", 1);

echo $re->getCiudad();

$re->setCiudad("Barcelona");
$entityManager->flush($re);
$re = $entityManager->find("Restaurante", 4);
if (!$re) {
    echo "Restaurante no encontrado!";
}
