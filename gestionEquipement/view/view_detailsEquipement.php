<?php $titre = "Details de l'équipement"; ?>
<?php $css = "style_equipment.css"; ?>
<?php ob_start(); ?>

    <div class="container container-buttons container-equipment">

		<?php while ($equipment = $req_details_equipment->fetch()) { ?>

			<?php $count_total = $req_count_total->fetch(); ?>
			<?php $count_available = $req_count_available->fetch(); ?>
			<?php $count_outoforder = $req_count_outoforder->fetch(); ?>
			<?php $count_inservice = $req_count_inservice->fetch(); ?>

            <h1><?= $equipment['name_category'] ?></h1>
            <div class="container-equipment-description">
                <h4><?= $equipment['description_category'] ?></h4>
                <p class="lead">Puissance de <?= $equipment['power'] ?>km/h 💦 Prix HT à partir de <?= $equipment['price'] ?>€/h</p>


                <table class="table ">
                    <thead>
                    <tr>
                        <th>Quantité totale</th>
                        <th>Quantité disponible</th>
                        <th>Quantité en service</th>
                        <th>Quantité hors service</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?= $count_total['count_items']; ?></td>
                        <td><?= $count_available['count_items']; ?></td>
                        <td><?= $count_outoforder['count_items']; ?></td>
                        <td><?= $count_inservice['count_items']; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="container container-img  ">
                <div class="col-md-7">
                    <img class="img-fluid img-thumbnail rounded" src="public/images/<?= $equipment['image'] ?>" alt="Jet ski">
                </div>
            </div>
		<?php } ?>

    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "template.php"); ?>