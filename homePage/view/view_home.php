<?php $titre="Accueil" ; ?>
<?php $background="https://www.villa-lv.com/wp-content/uploads/2017/11/tumblr-beach-waves-backgrounds-7096-7377-hd-wallpapers.jpg" ; ?>

<?php ob_start(); ?>

    <div class="container container-buttons">
        <div class="row list-buttons">
            <div class="col-md-6">
                <a href="../DynamicJet/index.php?action=gestionReservation"><button class="menu">Reservation</button></a>
            </div>
            <div class="col-md-6">
                <a href="../DynamicJet/index.php?action=gestionClient"><button class="menu">Gestion Clients</button></a>
            </div>
            <div class="col-md-6">
                <a href="../DynamicJet/index.php?action=gestionEquipement"><button class="menu">Equipements</button></a>
            </div>
            <div class="col-md-6">
                <a href="../DynamicJet/index.php?action=gestionEffectif"><button class="menu">Effectifs</button></a>
            </div>
        </div>
    </div>
  
<?php $contenu=ob_get_clean(); ?>
<?php require(dirname(__DIR__,2).DIRECTORY_SEPARATOR."general".DIRECTORY_SEPARATOR."template.php"); ?>