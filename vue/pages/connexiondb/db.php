<?php
$server="localhost";
$login="root";
$pass="";
 try{
    $connexion=new PDO("mysql:host=$server;dbname=gestion",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
 }
 catch(PDOException $e){
    echo 'echec'.$e->getMessage();
 }
   
?>