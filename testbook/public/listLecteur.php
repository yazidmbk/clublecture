<?php
$em = require_once "./bootstrap.php";


$lecteurRepository = $em->getRepository('Lecteur');
$lecteurs = $lecteurRepository->findAll();

foreach ($lecteurs as $lecteur){
    echo sprintf("-%s\n", $lecteur->getNom() );
}