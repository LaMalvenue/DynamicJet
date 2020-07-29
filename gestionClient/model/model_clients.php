<?php

function affiche_client(){

    require(dirname(__DIR__,2).DIRECTORY_SEPARATOR."general".DIRECTORY_SEPARATOR."cnx.php");

    $requete_affiche_clients = $cnx->query(" SELECT *  FROM client");

    return $requete_affiche_clients;

}
