<?php
require_once "./vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("./src/Entity");
$isDevMode = true;
// configuración de la base de datos
$dbParams = array(
	'driver' => 'pdo_mysql',
	'user' => 'colidom',
	'password' => 'Mysql2023',
	'dbname' => 'restaurantes',
	'host' => 'localhost',
);
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($dbParams, $config);
