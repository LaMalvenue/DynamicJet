<?php

require_once("gestionEquipement/controller/controller_liste_equipements.php");
require_once("gestionClient/controller/controller_liste_clients.php");
require_once("gestionEffectif/controller/controller_liste_effectifs.php");

if (isset($_GET['action'])) {
	if ($_GET['action'] === 'gestionEquipement') {
		if (isset($_GET['id_category'])) {
			if (isset($_POST['update'])) {
				update_equipment($_POST['name_category'], $_POST['description_category'], $_POST['power'], $_POST['price'], $_GET['id_category']);
			} elseif (isset($_POST['delete'])) {
				delete_equipment($_GET['id_category']);
			} else {
				details_equipment();
			}
		} elseif (!isset($_GET['id_category'])) {
			if (isset($_POST['insert'])) {
				addEquipments($_POST['name_category'], $_POST['description_category'], $_POST['power'], $_POST['price'], $_POST['image'], $_POST['amount'], $_POST['availability']);
			} else {
				equipment();
			}
		}
	} elseif ($_GET['action'] === 'gestionClient') {
		client();

	} elseif ($_GET['action'] === 'gestionEffectif') {
		effectif();
	}
} else {
	require('homePage/controller/controller_homePage.php');
}