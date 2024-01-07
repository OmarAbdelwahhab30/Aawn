<?php

namespace PHPMVC\lib;

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;
use Doctrine\ORM\Exception\MissingMappingDriverImplementation;
use Doctrine\ORM\ORMSetup;

class EntityManager
{
    private \Doctrine\ORM\EntityManager $entityManager;

    /**
     * @throws MissingMappingDriverImplementation
     * @throws Exception
     */
    public function __construct()
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: array(ENTITIES_PATH),
            isDevMode: false,
        );


        $connection = DriverManager::getConnection([
            'dbname' => $_ENV['DB_NAME'],
            'user' => $_ENV['DB_USERNAME'],
            'password' => $_ENV['DB_PASSWORD'],
            'host' => $_ENV['DB_HOST'],
            'driver' => $_ENV['DB_DRIVER'],
            'memory' => false
        ], $config);

        $this->entityManager = new \Doctrine\ORM\EntityManager($connection, $config);
    }

    public function getEntityManager(): \Doctrine\ORM\EntityManager
    {
        return $this->entityManager;
    }
}