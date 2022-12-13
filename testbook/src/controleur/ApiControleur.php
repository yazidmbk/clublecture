<?php
namespace controleur;



use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;use function Composer\Autoload\composerRequire;



class ApiControleur
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    public function getAllLecteur(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $em = $this->container->get('doctrine');

        $lecteurRepository = $em->getRepository('Lecteur');
        $lecteurs = $lecteurRepository->findBy(array(), array('prenom'=>'asc'));
        $payload = json_encode($lecteurs);

        $response->getBody()->write($payload);
        return $response
            ->withHeader('Content-Type', 'application/json');
    }

    public function getLivres(ServerRequestInterface  $request, ResponseInterface  $response, array $args): ResponseInterface{
        $em = $this->container->get('doctrine');
        $allGetVars = $request->getQueryParams();
        $livreRepository = $em->getRepository('Livre');
        $livres = $livreRepository->findBy($allGetVars, array('titre'=>'asc'));
        $playload = json_encode($livres);

        $response->getBody()->write($playload);
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function findRandom(ServerRequestInterface  $request, ResponseInterface  $response, array $args): ResponseInterface{
        $em = $this->container->get('doctrine');

        $livreRepository = $em->getRepository('Livre');
        $livres = $livreRepository->findBy(array(), array('titre'=>'asc'));

        $pos = range(0, 1002);
        shuffle($pos);
        $valeurs = array_slice($pos, 0 , 10);

        for ($i=0;$i<10;$i++){
            $tab[$i] = $livres[$valeurs[$i]];

        }
        $playload = json_encode($tab);

        $response->getBody()->write($playload);
        return $response->withHeader('Content-Type', 'application/json');
    }
    public function LeLecteur(ServerRequestInterface  $request, ResponseInterface  $response, array $args): ResponseInterface{
        $em = $this->container->get('doctrine');

        $lecteurepository = $em->getRepository('Livre');
        $lecteurs = $lecteurepository->findBy(array(), array('titre'=>'asc'));

        $pos = range(0, 296);
        shuffle($pos);
        $valeurs = array_slice($pos, 0, 1);
        $valeurRand =array();
        foreach ($valeurs as $value){ array_push($valeurRand, $lecteurs[$value]);}
        $playload = json_encode($valeurRand);


        $response->getBody()->write($playload);
        return $response->withHeader('Content-Type', 'application/json');
    }



}