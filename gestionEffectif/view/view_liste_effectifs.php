<?php 

$titre="Liste des employés" ;


ob_start();?>

<?php
    
    while($result_affiche_effectif=$requete_affiche_effectifs->fetch()){
 
       echo "<a class='listeeffectif' href='../controller/controller_liste_effectifs.php'>".$result_affiche_effectif['nom']."<br/></a>";



    }
    
 ?>   
 <?php $contenu=ob_get_clean(); ?>
 <?php require(dirname(__DIR__,2).DIRECTORY_SEPARATOR."general".DIRECTORY_SEPARATOR."template.php"); ?>
  