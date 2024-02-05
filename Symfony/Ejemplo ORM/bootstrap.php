<?php

require_once "./vendor/autoload.php";
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

$paths = $array("./src");
$isDevMode = true;

// Configuración de la base de datos
$dbParams = array(
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'user' => 'colidom',
    'password' => 'Mysql2023',
    'dbname' => 'restaurantes'
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null);
$entityManager = EntityManager::create($dbParams, $config);
