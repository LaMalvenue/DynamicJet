<?php $css = "style_equipment.css"; ?>

<?php ob_start(); ?>

<?php $equipment = $req_details_equipment->fetch(); ?>
<?php $count_total = $req_count_total->fetch(); ?>
<?php $count_available = $req_count_available->fetch(); ?>
<?php $count_outoforder = $req_count_outoforder->fetch(); ?>
<?php $count_inservice = $req_count_inservice->fetch(); ?>

<?php $titre = "Details : " . $equipment['name_category']; ?>

    <div class="container container-equipment">
        <div class="container-equipment-description">
            <div class="row">
                <div class="col-md-6">

                    <div id="details">
                        <h1 id="nameEquipment"><?= $equipment['name_category'] ?></h1>
                        <h4 id="descriptionEquipment"><?= $equipment['description_category'] ?></h4>
						<?php
						if ($equipment['power'] != 0) {
							echo "<p class=\"lead\">Puissance de <span id=\"powerEquipment\">" . $equipment['power'] . "</span>cv 💦 </p>";
						}
						?>
                        <p class="lead">Prix HT à partir de <span id="priceEquipment"><?= $equipment['price'] ?></span>€/h
                        </p>
                    </div>

                    <table class="table ">
                        <thead>
                        <tr>
                            <th>Quantité disponible</th>
                            <th>Quantité en service</th>
                            <th>Quantité hors service</th>
                            <th>Quantité totale</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?= $count_available['count_items']; ?></td>
                            <td><?= $count_outoforder['count_items']; ?></td>
                            <td><?= $count_inservice['count_items']; ?></td>
                            <td><?= $count_total['count_items']; ?></td>
                        </tr>
                        </tbody>
                    </table>

                        <div id="addEquipmentArea"></div>
                        <button id="addEquipmentButton" type="button" class="btn btn-primary " name="add">Ajouter</button>

                </div>
                <div class="col-md-6 container-img">
                    <img class="img-fluid img-thumbnail rounded" src="public/images/<?= $equipment['image'] ?>"
                         alt="Jet ski">
                </div>
            </div>
            <div class="row delete">
                <a href="">
                    <button type="button" class="btn btn-primary" name="update" id="update">Modifier</button>
                </a>
                <form action="" method="post">
                    <button type="submit" class="btn btn-danger " name="delete">Supprimer</button>
                </form>
            </div>
        </div>
    </div>

    <script src="public/js/update_equipment.js"></script>

<?php $contenu = ob_get_clean(); ?>

<?php require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "template.php"); ?>