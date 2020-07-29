<?php 

include(dirname(__DIR__).DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."model_equipements.php");

function equipement(){
    $requete_affiche_equipements = affiche_equipement(); 
    include(dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."view_liste_equipements.php");
}


function detail_equipement(){
    $requete_details_equipements=afficher_details_equipement();
    include(dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."view_detailsEquipement.php");
}
