<?php 

include(dirname(__DIR__).DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."model_clients.php");

function client(){

    $requete_affiche_clients = affiche_client(); 
    include(dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."view_liste_clients.php");
    
}
