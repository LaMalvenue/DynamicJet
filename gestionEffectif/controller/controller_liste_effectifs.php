<?php 

include(dirname(__DIR__).DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."model_effectifs.php");

function effectif(){

    $requete_affiche_effectifs = affiche_effectif(); 
    include(dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."view_liste_effectifs.php");
    
}
