<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
// $paths = array("/src/entities");
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/entities"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadaCtaonfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
    'dbname' => 'orm',
    'user' => 'root',
    'password' => '',
    'host' => '127.0.0.1',
    'driver' => 'pdo_mysql', 
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
?>