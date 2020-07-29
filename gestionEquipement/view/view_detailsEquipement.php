<?php $titre = "Details de l'équipement"; ?>

<?php ob_start(); ?>

<?php while($equipement=$requete_details_equipements->fetch()){ ?>
<?php $count=$req_count->fetch(); ?>

    <p>Nom : <?= $equipement['name_category']?></p>
    <p>Description : <?= $equipement['description_category']?></p>
    <p>Puissance : <?= $equipement['power']?>km/h</p>
    <p>Prix HT : <?= $equipement['price']?>€/h</p>

    <p>Quantité disponible : <?= $count['count_items']?></p>

    <p><img src="<?= $equipement['image'] ?>" alt="Jet ski" width="300px"></p>


<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "template.php"); ?>