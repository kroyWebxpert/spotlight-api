<?php

use Doctrine\ORM\Tools\Setup;

use Doctrine\ORM\EntityManagerInterface;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;


//require_once "vendor/autoload.php";


require_once __DIR__.'/../vendor/autoload.php';

// Create a simple "default" Doctrine ORM configuration for XML Mapping
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode,null, null, false);
// or if you prefer yaml or annotations
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
/*$conn = array(
    'driver' => 'pdo_mysql',
    'path' => 'spotlight_client.sql',
);
*/

$conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'dbname'   => 'bsd_master',
    'user'     => 'root',
    'password' => 'root'
);
//$this->platform->registerDoctrineTypeMapping('enum', 'string');

// obtaining the entity manager
$entityManager = Doctrine\ORM\EntityManager::create($conn, $config); 
 



$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager)
));
return $helperSet;