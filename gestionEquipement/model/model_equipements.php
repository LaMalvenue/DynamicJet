<?php

function affiche_equipement()
{
	require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "cnx.php");
	$requete_affiche_equipements = $cnx->query(" SELECT *  FROM category_equipement");

	return $requete_affiche_equipements;
}


function afficher_details_equipement()
{
	require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "cnx.php");
	$requete_details_equipements = $cnx->prepare(" SELECT * FROM category_equipement WHERE id_category = ? ");
	$requete_details_equipements->execute(array($_GET['id_category']));

	return $requete_details_equipements;
}

function count_equipement()
{
	require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "cnx.php");
	$req_count = $cnx->prepare('SELECT COUNT(*) AS count_items FROM equipement WHERE id_category = ?');
	$req_count->execute(array($_GET['id_category']));

	return $req_count;
}