<?php

require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'vendor', 'autoload.php']);

use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;

// Connexion à la base de données 
$dbParams = [
    'driver'   => 'pdo_mysql',       // le sgbd 
    'host'     => 'localhost',       // l’adresse ip du serveur bdd 
    'charset'  => 'utf8',
    'user'     => 'root',           // login d’accés 
    'password' => '',           // mdp
    'dbname'   => 'testdoctrine',        // nom BDD 
];

$config = ORMSetup::createAnnotationMetadataConfiguration(
    paths: array(__DIR__."/src"),		//le répertoire des entités
    isDevMode: true,
);

$entityManager = EntityManager::create($dbParams, $config);

return $entityManager; 