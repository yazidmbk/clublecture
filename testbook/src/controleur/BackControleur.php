<?php


namespace controleur;


use mysql_xdevapi\Exception;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;



class BackControleur
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    public function Home(Request $request, Response $response, array $args)
    {
        $em = $this->container->get('doctrine');
        $twig = $this->container->get('twig');

        $lecteurRepository = $em->getRepository('lecteur');
        $lecteurs = $lecteurRepository->findBy(array(),array('nom'=>'asc'));

        return $twig->render($response, 'home.html.twig',['entities' => $lecteurs]);

    }

    public function Connexion(Request $request, Response $response, array $args){
        $em = $this->container->get('doctrine');
        $twig = $this->container->get('twig');

        $lecteurRepository = $em->getRepository('lecteur');
        $lecteurs = $lecteurRepository->findBy(array(),array('nom'=>'asc'));

        return $twig->render($response, 'connexion.html.twig', ['entities' => $lecteurs]);
    }

    public function TabLivre(Request $request, Response $response, array $args){
        $em = $this->container->get('doctrine');
        $twig = $this->container->get('twig');

        $livreRepository = $em->getRepository('livre');
        $livre = $livreRepository->findBy(array(), array('titre'=>'asc'));

        return $twig->render($response, 'livre.html.twig', ['entities' => $livre]);
    }

    public function TabLecteurs(Request $request, Response $response, array $args){
        $em = $this->container->get('doctrine');
        $twig = $this->container->get('twig');

        $lecteursRepository = $em->getRepository('lecteur');
        $lecteur = $lecteursRepository->findAll();

        return $twig->render($response, 'lecteur.html.twig', ['entities' => $lecteur]);
    }
    public function crudlecteur(Request $request, Response $response, array $args){
        $em = $this->container->get('doctrine');
        $twig = $this->container->get('twig');

        $lecteursRepository = $em->getRepository('lecteur');
        $lecteur = $lecteursRepository->findAll();

        return $twig->render($response, 'crudlecteur.html.twig', ['entities' => $lecteur]);
    }

  /*  public function addUser(Request $request, Response $response, array $args): ResponseInterface
    {
        $em = $this->container->get('doctrine');
        $allPostPutVars = $request->getParsedBody();
        $user = new \lecteur();
        $user->setNom($allPostPutVars['nom']);
        $user->setPrenom($allPostPutVars['prenom']);
        $user->setPseudo($allPostPutVars['pseudo']);
        $user->setLogin($allPostPutVars['login']);
        $user->setPassword($allPostPutVars['password']);
        $user->setDroit($allPostPutVars['droit']);

        try {
            $em->persist($user);
            $em->flush();
            $result = array( 'status' => 200,
                'message' => "Lecteur ajouté");

            $response->getBody()->write(json_encode($result));

        }
        catch (Exception $e){
            $response->getBody()->write("Erreur : lecteur non ajouté \n$e");

        }
        return $response;


    }*/

}