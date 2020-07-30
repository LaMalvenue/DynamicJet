<?php $titre = "Details de l'équipement"; ?>

<?php ob_start(); ?>

<?php
while($equipment=$req_details_equipment->fetch()){ ?>

<?php $count=$req_count->fetch(); ?>

    <p>Nom : <?= $equipment['name_category']?></p>
    <p>Description : <?= $equipment['description_category']?></p>
    <p>Puissance : <?= $equipment['power']?>km/h</p>
    <p>Prix HT : <?= $equipment['price']?>€/h</p>

    <p>Quantité disponible : <?= $count['count_items']; ?></p>

    <p><img src="<?= $equipment['image'] ?>" alt="Jet ski" width="300px"></p>


<?php  } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "template.php"); ?>