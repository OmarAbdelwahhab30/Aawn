<?php
use Doctrine\Common\DataFixtures\Loader;
use DataBase\seeders\SpecializationSeeder;
use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Dotenv\Dotenv;
use PHPMVC\lib\EntityManager;

require_once "vendor".DIRECTORY_SEPARATOR."autoload.php";

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once "app".DIRECTORY_SEPARATOR."config.php";

$loader = new Loader();

$db = new EntityManager();

$loader->addFixture(new SpecializationSeeder());

$executor = new ORMExecutor($db->getEntityManager(), new ORMPurger());

$executor->execute($loader->getFixtures());
