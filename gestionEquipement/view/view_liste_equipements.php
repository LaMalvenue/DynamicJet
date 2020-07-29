<?php $titre="Liste des équipements" ;
ob_start();?>

<?php

    while($result_affiche_equipement=$requete_affiche_equipements->fetch()){

       echo
           "<a class='listeEquipement' href='routeur.php?action=gestionEquipement&id_category=".$result_affiche_equipement['id_category']."'>"
           .$result_affiche_equipement['name_category'].
           "<br/></a>";
    }

 ?>
 <?php $contenu=ob_get_clean(); ?>
 <?php require(dirname(__DIR__,2).DIRECTORY_SEPARATOR."general".DIRECTORY_SEPARATOR."template.php"); ?>