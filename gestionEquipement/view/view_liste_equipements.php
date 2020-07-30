<?php $titre = "Liste des équipements";
$background = "https://www.villa-lv.com/wp-content/uploads/2017/11/tumblr-beach-waves-backgrounds-7096-7377-hd-wallpapers.jpg";
ob_start(); ?>


    <div class="container list-equipment">
        <ul>
			<?php while ($result_show_equipment = $req_show_equipments->fetch()) { ?>
                <li>
                    <a class='listeEquipement'
                       href='routeur.php?action=gestionEquipement&id_category="<?= $result_show_equipment['id_category'] ?>"'>
                        <button class="button-equipment">
							<?= $result_show_equipment['name_category'] ?>
                        </button>
                    </a>
                </li>
			<?php } ?>
        </ul>
    </div>


<?php $contenu = ob_get_clean(); ?>
<?php require(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "general" . DIRECTORY_SEPARATOR . "template.php"); ?>