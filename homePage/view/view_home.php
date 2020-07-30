<?php $titre="homePage" ; ?>
<?php ob_start(); ?>

    <div class="containerblock">
        <div class="items"><a href="../DynamicJet/routeur.php?action=gestionReservation">Reservation</a></div>
        <div class="items"><a href="../DynamicJet/routeur.php?action=gestionClient">Gestion Clients</a></div>
        <div class="items"><a href="../DynamicJet/routeur.php?action=gestionEquipement">Equipements</a></div>
        <div class="items"><a href="../DynamicJet/routeur.php?action=gestionEffectif">Effectifs</a></div>
    </div>
  
<?php $contenu=ob_get_clean(); ?>
<?php require(dirname(__DIR__,2).DIRECTORY_SEPARATOR."general".DIRECTORY_SEPARATOR."template.php"); ?>