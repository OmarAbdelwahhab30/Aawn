<?php

require 'vendor/autoload.php';

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager;
use Doctrine\Migrations\DependencyFactory;
use Doctrine\Migrations\Configuration\Migration\PhpFile;
use Doctrine\DBAL\DriverManager;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = new PhpFile('migrations.php'); // Or use one of the Doctrine\Migrations\Configuration\Configuration\* loaders

$paths = [__DIR__ . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR . "models" . DIRECTORY_SEPARATOR];

$isDevMode = false;

$ORMConfig = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
$connection = DriverManager::getConnection([
    'dbname' => $_ENV['DB_NAME'],
    'user' => $_ENV['DB_USERNAME'],
    'password' => $_ENV['DB_PASSWORD'],
    'host' => $_ENV['DB_HOST'],
    'port' => $_ENV['DB_PORT_NUMBER'],
    'driver' => $_ENV['DB_DRIVER'],
    'memory' => false
]);


$entityManager = new EntityManager($connection, $ORMConfig);


return DependencyFactory::fromEntityManager($config, new ExistingEntityManager($entityManager));