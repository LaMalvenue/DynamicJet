<?php 

$titre="Liste des clients" ;


ob_start();?>

<?php
    
    while($result_affiche_client=$requete_affiche_clients->fetch()){
 
       echo "<a class='listeclient' href='../controller/controller_liste_clients.php'>".$result_affiche_client['nom']."<br/></a>";



    }
    
 ?>   
 <?php $contenu=ob_get_clean(); ?>
 <?php require(dirname(__DIR__,2).DIRECTORY_SEPARATOR."general".DIRECTORY_SEPARATOR."template.php"); ?>
  