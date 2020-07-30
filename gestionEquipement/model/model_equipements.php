<?php

function show_equipment()
{
	require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "cnx.php");
	$req_show_equipments = $cnx->query(" SELECT *  FROM category_equipement");

	return $req_show_equipments;
}


function show_details_equipment()
{
	require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "cnx.php");
	$req_details_equipment = $cnx->prepare(" SELECT * FROM category_equipement WHERE id_category = ? ");
	$req_details_equipment->execute(array($_GET['id_category']));

	return $req_details_equipment;
}

function show_count_equipment()
{
	require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "cnx.php");
	$req_count = $cnx->prepare('SELECT COUNT(*) AS count_items FROM equipement WHERE id_category = ?');
	$req_count->execute(array($_GET['id_category']));

	return $req_count;
}