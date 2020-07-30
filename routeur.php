<?php

require_once("gestionEquipement/controller/controller_liste_equipements.php");
require_once("gestionClient/controller/controller_liste_clients.php");
require_once("gestionEffectif/controller/controller_liste_effectifs.php");

if(isset($_GET['action'])){

    if($_GET['action']==='gestionEquipement'){
    	if (isset($_GET['id_category'])) {
    		if ($_GET['id_category']>=1 && $_GET['id_category']<=5) {
			    details_equipment();
		    } else {
    			echo "Cette catégorie n'existe pas !";
		    }
	    } elseif(!isset($_GET['id_category'])) {
		    equipment();
	    }
    }
    elseif($_GET['action']==='gestionClient'){
        client();
    
    }
    elseif($_GET['action']==='gestionEffectif'){
        effectif();
    }

} else {
    require('homePage/controller/controller_homePage.php');
}