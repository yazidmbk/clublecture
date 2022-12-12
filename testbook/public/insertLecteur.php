<?php

$em = require_once "./bootstrap.php";
//require_once "./src/lecteur.php";
$newLecteurName = $argv[1];
$newLecteurPrenom = $argv[2];
$newLecteurPseudo = $argv[3];
$newLecteurLogin = $argv[4];
$newLecteurPassword = $argv[5];
$newLecteurDroit = $argv[6];



$lecteur2 = new lecteur();
$lecteur2->setNom($newLecteurName);
$lecteur2->setPrenom($newLecteurPrenom);
$lecteur2->setPseudo($newLecteurPseudo);
$lecteur2->setLogin($newLecteurLogin);
$lecteur2->setPassword($newLecteurPassword);
$lecteur2->setDroit($newLecteurDroit);

$em->persist($lecteur2);
$em->flush();

