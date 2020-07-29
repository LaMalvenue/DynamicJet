<?php

function affiche_effectif(){

    require(dirname(__DIR__,2).DIRECTORY_SEPARATOR."general".DIRECTORY_SEPARATOR."cnx.php");

    $requete_affiche_effectifs = $cnx->query(" SELECT *  FROM employe");

    return $requete_affiche_effectifs;

}
