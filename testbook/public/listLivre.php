<?php

$em = require_once "./bootstrap.php";


$livreRepository = $em->getRepository('Livre');
$livres = $livreRepository->findAll();

foreach ($livres as $livre) {
    echo sprintf("-%s\n", $livre->getTitre());
}