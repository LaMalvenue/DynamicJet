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

function count_total_equipment()
{
	require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "cnx.php");
	$req_count_total = $cnx->prepare('SELECT COUNT(*) AS count_items FROM equipement WHERE id_category = ?');
	$req_count_total->execute(array($_GET['id_category']));

	return $req_count_total;
}

function count_available_equipment()
{
	require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "cnx.php");
	$req_count_available = $cnx->prepare('SELECT COUNT(*) AS count_items FROM equipement WHERE id_category = ? AND id_status=1');
	$req_count_available->execute(array($_GET['id_category']));

	return $req_count_available;
}

function count_outoforder_equipment()
{
	require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "cnx.php");
	$req_count_outoforder = $cnx->prepare('SELECT COUNT(*) AS count_items FROM equipement WHERE id_category = ? AND id_status=2');
	$req_count_outoforder->execute(array($_GET['id_category']));

	return $req_count_outoforder;
}

function count_inservice_equipment()
{
	require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "cnx.php");
	$req_count_inservice = $cnx->prepare('SELECT COUNT(*) AS count_items FROM equipement WHERE id_category = ? AND id_status=3');
	$req_count_inservice->execute(array($_GET['id_category']));

	return $req_count_inservice;
}

function show_update_equipment($name_category,$description_category,$power,$price,$id_category)
{
	require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "cnx.php");
	$update = $cnx->prepare('UPDATE category_equipement SET name_category=:name_category , description_category=:description_category, power=:power,price=:price WHERE id_category = :id_category');
	$req_update = $update->execute(array(
		'name_category'=>$_POST['name_category'],
		'description_category'=>$_POST['description_category'],
		'power'=>$_POST['power'],
		'price'=>$_POST['price'],
		'id_category'=>$_GET['id_category']));
	return $update;
}

function show_delete_equipment()
{
	require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "cnx.php");
	$req_delete = $cnx->prepare(' DELETE FROM category_equipement  WHERE id_category = ?');
	$req_delete->execute(array($_GET['id_category']));

	return $req_delete;
}

function add_category($name_category,$description_category,$power,$price,$image){

	require(dirname(__DIR__,2).DIRECTORY_SEPARATOR."general".DIRECTORY_SEPARATOR."cnx.php");

	// $req_add_equipement = $cnx->prepare(' INSERT INTO equipement (nom_equipement,categorie,description,image,quantite,puissance,etat_service,prix_loc_HT) VALUES (?,?,?,?,?,?,?,?) ');
	// $req_add_equipement->execute(array($nom_equipement, $categorie, $description, $image, $quantite, $puissance, $etat_service, $prix_loc_HT));

	$req_add_category = $cnx->prepare('INSERT INTO category_equipement (name_category,description_category,power,price,image) 
    VALUES (:name_category,:description_category,:power,:price,:image)');
	$req_add_category->execute(array(
		'name_category'=>$_POST['name_category'],
		'description_category' => $_POST['description_category'],
		'power'=> $_POST['power'],
		'price'=> $_POST['price'],
		'image'=> $_POST['image'],
	));
	return $req_add_category;

}


function add_equipment($availability,$name_category){

	require(dirname(__DIR__,2).DIRECTORY_SEPARATOR."general".DIRECTORY_SEPARATOR."cnx.php");

	$req_id_category = $cnx->prepare('SELECT id_category FROM category_equipement WHERE name_category = ?') ;
	$req_id_category->execute(array($_POST['name_category']));

	$row = $req_id_category->fetch();
	if($row){
		$result_id_category=$row['id_category'];
	}

	$req_add_equipment = $cnx->prepare('INSERT INTO equipement (id_category,id_status) 
        VALUES (:id_category,:availability)');
	$req_add_equipment->execute(array(
		'id_category'=>$result_id_category,
		'availability' => $_POST['availability']));

	return $req_add_equipment;

}
