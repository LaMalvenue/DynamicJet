<?php $titre = "Details de l'équipement"; ?>

<?php ob_start(); ?>

<?php
while($equipment=$req_details_equipment->fetch()){ ?>

<?php $count_total=$req_count_total->fetch(); ?>
	<?php $count_available=$req_count_available->fetch(); ?>
	<?php $count_outoforder=$req_count_outoforder->fetch(); ?>
	<?php $count_inservice=$req_count_inservice->fetch(); ?>

    <p>Nom : <?= $equipment['name_category']?></p>
    <p>Description : <?= $equipment['description_category']?></p>
    <p>Puissance : <?= $equipment['power']?>km/h</p>
    <p>Prix HT : <?= $equipment['price']?>€/h</p>

    <p>Quantité totale : <?= $count_total['count_items']; ?></p>
    <p>Quantité disponible : <?= $count_available['count_items']; ?></p>
    <p>Quantité en service : <?= $count_outoforder['count_items']; ?></p>
    <p>Quantité hors service : <?= $count_inservice['count_items']; ?></p>

    <p><img src="<?= $equipment['image'] ?>" alt="Jet ski" width="300px"></p>


<?php  } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "template.php"); ?>