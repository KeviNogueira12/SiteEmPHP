<?php

namespace App\Core;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class Database
{
    private function __construct() {}

    private static EntityManager $entityManager;

    public static function getEntityManager(): EntityManager
    {
        if (!isset(self::$entityManager)) {
            self::$entityManager = new EntityManager(
                self::getConnection(),
                self::getConfig()
            );
        }

        return self::$entityManager;
    }

    private static function getConfig(): Configuration
    {
        $paths = [__DIR__ . '/../Model'];
        $isDevMode = false;

        return ORMSetup::createAttributeMetadataConfiguration(
            $paths,
            $isDevMode
        );
    }

    private static function getConnection(): Connection
    {
        $dbParams = [
            'driver'   => 'pdo_mysql',
            'user'     => 'root',
            'password' => 'senha',
            'dbname'   => 'zippa',
            'host'     => '10.10.20.96'
        ];

        $config = self::getConfig();

        return DriverManager::getConnection(
            $dbParams,
            $config
        );
    }
}
