<?php $titre="homePage" ; ?>
<?php $background="https://www.villa-lv.com/wp-content/uploads/2017/11/tumblr-beach-waves-backgrounds-7096-7377-hd-wallpapers.jpg" ; ?>

<?php ob_start(); ?>

    <style type="text/css">
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>

    <div class="container container-menu">
        <div class="row">
            <div class="col-md-6">
                <a href="../DynamicJet/routeur.php?action=gestionReservation"><button class="menu">Reservation</button></a>
            </div>
            <div class="col-md-6">
                <a href="../DynamicJet/routeur.php?action=gestionClient"><button class="menu">Gestion Clients</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="../DynamicJet/routeur.php?action=gestionEquipement"><button class="menu">Equipements</button></a>
            </div>
            <div class="col-md-6">
                <a href="../DynamicJet/routeur.php?action=gestionEffectif"><button class="menu">Effectifs</button></a>
            </div>
        </div>
    </div>
  
<?php $contenu=ob_get_clean(); ?>
<?php require(dirname(__DIR__,2).DIRECTORY_SEPARATOR."general".DIRECTORY_SEPARATOR."template.php"); ?>