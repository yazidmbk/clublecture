<?php

$em = require_once "./bootstrap.php";
//require_once "./src/lecteur.php";
$newLivreTitre = $argv[1];
$newLivreAuteur = $argv[2];
$newLivreDescription = $argv[3];
$newLivrePhoto = $argv[4];


$livre2 = new livre();
$livre2->setTitre($newLivreTitre);
$livre2->setAuteur($newLivreAuteur);
$livre2->setDescription($newLivreDescription);
$livre2->setPhoto($newLivrePhoto);

$em->persist($livre2);
$em->flush();
