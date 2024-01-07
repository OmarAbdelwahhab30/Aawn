<?php
namespace PHPMVC;
session_start();

use DataBase\seeders\SpecializationSeeder;
use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Dotenv\Dotenv;
use PHPMVC\lib\Database;
use PHPMVC\lib\EntityManager;
use PHPMVC\LIB\FrontController;
use Doctrine\Common\DataFixtures\Loader;


require_once dirname(__DIR__).DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

require_once dirname(__DIR__).DIRECTORY_SEPARATOR."app".DIRECTORY_SEPARATOR."config.php";

/* Uncomment this code for executing the following seeding code */

//$loader = new Loader();
//
//$db = new EntityManager();
//
//$loader->addFixture(new SpecializationSeeder());
//
//$executor = new ORMExecutor($db->getEntityManager(), new ORMPurger());
//
//$executor->execute($loader->getFixtures());

/******************************************************************/

$front = new FrontController();

