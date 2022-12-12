<?php

$em = require_once "../bootstrap.php";

$handle = fopen("myFile0.csv","r");
fgetcsv($handle,null,","); // on passe la première ligne qui contient les noms des champs
while ($tab=fgetcsv($handle,null,",")){

    $livres = new livre();
    $livres->setTitre($tab[0]);
    $livres->setAuteur($tab[1]);
    $livres->setDescription($tab[2]);
    $livres->setPhoto($tab[3]);


    $em->persist($livres);
    $em->flush();
}