<?php 
try
{
    $cnx = new PDO('mysql:host=localhost:3308;dbname=dynamicjet;charset=utf8', 'root', '');
    
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
    
  
}
?>