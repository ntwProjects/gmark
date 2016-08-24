<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Tools\Setup,
//    Doctrine\ORM\EntityRepository,
    Doctrine\ORM\EntityManager;

//use Doctrine\Common\ClassLoader,
//    Doctrine\ORM\Configuration,
//    Doctrine\ORM\EntityManager,
//    Doctrine\Common\Cache\ArrayCache,
//    Doctrine\DBAL\Logging\EchoSQLLogger,
//    Doctrine\ORM\Mapping\Driver\DatabaseDriver,
//    Doctrine\ORM\Tools\DisconnectedClassMetadataFactory,
//    Doctrine\ORM\Tools\EntityGenerator;

class Doctrine {
    /*
     * @var instance unique de la classe
     */

    private static $instance;
    /*
     * @var entity manager
     */
    private $em;

    public function __construct() {
        require_once __DIR__ . '/Doctrine/ORM/Tools/Setup.php';
        Setup::registerAutoloadDirectory(__DIR__);

        // Load the database configuration from CodeIgniter
        require APPPATH . 'config/database.php';

        $connection_options = array(
            'driver' => 'pdo_mysql',
            'user' => $db['default']['username'],
            'password' => $db['default']['password'],
            'host' => $db['default']['hostname'],
            'dbname' => $db['default']['database'],
            'charset' => $db['default']['char_set'],
            'driverOptions' => array(
                'charset' => $db['default']['char_set'],
            ),
        );

        // With this configuration, your model files need to be in application/models/Entity
        // e.g. Creating a new Entity\User loads the class from application/models/Entity/User.php
        $models_namespace = 'entities';
        $models_path = APPPATH . 'models';
        $proxies_dir = APPPATH . 'models/proxies';
        $metadata_paths = array(APPPATH . 'models');
        // Set $dev_mode to TRUE to disable caching while you develop
//        $dev_mode = true;
        $application_mode = "development";
        // If you want to use a different metadata driver, change createAnnotationMetadataConfiguration
        // to createXMLMetadataConfiguration or createYAMLMetadataConfiguration.
        $config = Setup::createAnnotationMetadataConfiguration($metadata_paths);
        $config->setProxyNamespace('proxies');
        $config->setAutoGenerateProxyClasses(ENVIRONMENT == 'development');

        if ($application_mode == "development") {
            $config->setAutoGenerateProxyClasses(true);
        } else {
            $config->setAutoGenerateProxyClasses(false);
        }

        if ($application_mode == "development") {
            $cache = new \Doctrine\Common\Cache\ArrayCache;
        } else {
            $cache = new \Doctrine\Common\Cache\ApcCache;
        }
        $config->setQueryCacheImpl($cache);

        $config->setQueryCacheImpl($cache);

        $config->setProxyDir($proxies_dir);
        $this->em = EntityManager::create($connection_options, $config);
        $loader = new ClassLoader($models_namespace, $models_path);
        $loader->register();
        $tool = new \Doctrine\ORM\Tools\SchemaTool($this->em);
        $classes = array(
            $this->em->getClassMetadata('entities\gender'),
            $this->em->getClassMetadata('entities\grade'),
            $this->em->getClassMetadata('entities\academicyear'),
            $this->em->getClassMetadata('entities\session'),
            $this->em->getClassMetadata('entities\domain'),
            $this->em->getClassMetadata('entities\credit'),
            $this->em->getClassMetadata('entities\classes'),
            $this->em->getClassMetadata('entities\career'),
            $this->em->getClassMetadata('entities\specialty'),
            $this->em->getClassMetadata('entities\feetype'),
            $this->em->getClassMetadata('entities\group'),
            $this->em->getClassMetadata('entities\area'),
            $this->em->getClassMetadata('entities\communal'),
//            $this->em->getClassMetadata('entities\agglomeration'),
//            $this->em->getClassMetadata('entities\city'),
            $this->em->getClassMetadata('entities\prefecture'),
            $this->em->getClassMetadata('entities\quarter'),
            $this->em->getClassMetadata('entities\level'),
            $this->em->getClassMetadata('entities\lessonunit'),
            $this->em->getClassMetadata('entities\evaluationtype'),
            $this->em->getClassMetadata('entities\mention'),
            $this->em->getClassMetadata('entities\country')
        );
        $tool->updateSchema($classes, TRUE);
    }

    // méthode singleton
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Doctrine();
        }
        return self::$instance;
    }

    function getEm() {
        return $this->em;
    }

    function setEm($em) {
        $this->em = $em;
    }

}
