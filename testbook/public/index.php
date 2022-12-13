
<?php

use DI\Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
include "refreshcache.php";

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();
AppFactory::setContainer($container);




$app = AppFactory::create();

$container->set('doctrine', function (){
   $em = require_once '../bootstrap.php';
   return $em;
});
$container->set('twig', function () {
    $loader = new \Twig\Loader\FilesystemLoader('./template/');
    $view = new \Slim\Views\Twig($loader, [
        'cache' => '../cache'
    ]);
    return $view;
});

$app->get('/hello/{nom}', function (Request $request, Response $response, array $args) {
    $response->getBody()->write("hello ".$args['nom']);
    return $response;
});

$app->get('/lecteurs', \controleur\ApiControleur::class . ':getAllLecteur');
$app->get('/livres', \controleur\ApiControleur::class . ':getAllLivres');
$app->get('/rand', \controleur\ApiControleur::class. ':findRandom');
$app->get('/lelue', \controleur\ApiControleur::class. ':LeLecteur');


// partie back controleur

$app->get('/Home', \controleur\BackControleur::class . ':Home');
$app->get('/Connexion', \controleur\BackControleur::class . ':Connexion');
$app->get('/tablivre', \controleur\BackControleur::class . ':TabLivre');
$app->get('/tablecteurs', \controleur\BackControleur::class . ':TabLecteurs');
 // $app->get('/addlecteur', \controleur\BackControleur::class . ':crudlecteur');




$app->run();
