<?php $titre = "Liste des équipements";
ob_start(); ?>

    <div class="container container-buttons">
        <div class="row list-buttons">
			<?php while ($result_show_equipment = $req_show_equipments->fetch()) { ?>
                <div class="col-md-5">
                    <a href='index.php?action=gestionEquipement&id_category=<?= $result_show_equipment['id_category'] ?>'>
                        <button class="button-equipment">
							<?= $result_show_equipment['name_category'] ?>
                        </button>
                    </a>
                </div>
			<?php } ?>
            <div class="col-md-5">
                <a href=''>
                    <button id="insertCategoryButton" class="button-equipment">
				       Ajouter une catégorie ?
                    </button>
                </a>
                <div id="insertCategoryArea"></div>
            </div>
        </div>
    </div>

    <script src="public/js/app.js"></script>

<?php $contenu = ob_get_clean(); ?>
<?php require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "template.php"); ?>