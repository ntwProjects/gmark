<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Symfony\Component\Console\Helper\HelperSet,
        Doctrine\ORM\Tools\Console\ConsoleRunner;


if (!defined('APPPATH')) {
    define('APPPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
}
if (!defined('BASEPATH')) {
    define('BASEPATH', APPPATH . '/../system/');
}
if (!defined('ENVIRONMENT')) {
    define('ENVIRONMENT', 'development');
}

require BASEPATH . '/libraries/Doctrine.php';

foreach ($GLOBALS as $helperSetCandidate) {
    if ($helperSetCandidate instanceof HelperSet) {
        $helperSet = $helperSetCandidate;
        break;
    }
}

$doctrine = Doctrine::getInstance();

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($doctrine->getEm()->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($doctrine->getEm())
        ));

ConsoleRunner::run($helperSet);

//$cli = new \Symfony\Component\Console\Application('Doctrine Command Line Interface (CodeIgniter integration by Joel Verhagen)', Doctrine\ORM\Version::VERSION);
//$cli->setCatchExceptions(true);
//$cli->setHelperSet($helperSet);
//$cli->addCommands(array(
// 
//    new \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand(),
//    new \Doctrine\DBAL\Tools\Console\Command\ImportCommand(),
// 
//    new \Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand(),
//    new \Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand(),
//    new \Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand(),
//    new \Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand(),
//    new \Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand(),
//    new \Doctrine\ORM\Tools\Console\Command\SchemaTool\DropCommand(),
//    new \Doctrine\ORM\Tools\Console\Command\EnsureProductionSettingsCommand(),
//    new \Doctrine\ORM\Tools\Console\Command\ConvertDoctrine1SchemaCommand(),
//    new \Doctrine\ORM\Tools\Console\Command\GenerateRepositoriesCommand(),
//    new \Doctrine\ORM\Tools\Console\Command\GenerateEntitiesCommand(),
//    new \Doctrine\ORM\Tools\Console\Command\GenerateProxiesCommand(),
//    new \Doctrine\ORM\Tools\Console\Command\ConvertMappingCommand(),
//    new \Doctrine\ORM\Tools\Console\Command\RunDqlCommand(),
//    new \Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand(),
// 
//));
//$cli->run();
