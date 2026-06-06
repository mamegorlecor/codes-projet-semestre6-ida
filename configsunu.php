<?php 
$server="localhost";
$user="root";
$pass="";
$encodage="utf-8";
try{

    $connexion = new PDO("mysql:host=$server;dbname=sunusavoirfaire;$encodage",$user,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connexion reussi";
}
catch(PDOException $e){
    echo "erreur".$e->getMessage();

}



?>