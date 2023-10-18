<?php
$username='root';
$passwpod='';
$dbname='gestion_pro';
try{

    $pdo=new PDO('mysql:host=localhost;dbname=gestion_pro',$username,$passwpod);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   


}catch(PDOException $e){
    die('erreur'.$e->getMessage());
}
?>