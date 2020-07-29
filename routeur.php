<?php

require_once("gestionEquipement/controller/controller_liste_equipements.php");
require_once("gestionClient/controller/controller_liste_clients.php");
require_once("gestionEffectif/controller/controller_liste_effectifs.php");

if(isset($_GET['action'])){

    if($_GET['action']==='gestionEquipement'){
    	if (isset($_GET['id_category'])) {
    		detail_equipement();
    		count_equipement();
	    } elseif(!isset($_GET['id_category'])) {
		    equipement();
	    }
    }
    elseif($_GET['action']==='gestionClient'){
        ///unset($_GET['action']);
        client();
    
    }
    elseif($_GET['action']==='gestionEffectif'){
        ///unset($_GET['action']);
        effectif();
    }

} else {
    //header('Location:homePage/view/view_home.php');
    require('homePage/controller/controller_homePage.php');
}