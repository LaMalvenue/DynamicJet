<?php 

include(dirname(__DIR__).DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."model_equipements.php");

function equipment(){
	$req_show_equipments = show_equipment();
    include(dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."view_liste_equipements.php");
}

function details_equipment(){
	$req_details_equipment=show_details_equipment();
	$req_count_total=count_total_equipment();
	$req_count_available=count_available_equipment();
	$req_count_outoforder=count_outoforder_equipment();
	$req_count_inservice=count_inservice_equipment();

    include(dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."view_detailsEquipement.php");
}
