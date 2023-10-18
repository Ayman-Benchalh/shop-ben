<?php

include('condb.php');

$iduser=$_GET['iduser'];
$id=$_GET['id'];
$total_prix=$_GET['prix_prod'];
$idproduit=$_GET['idproduit'];
$url='iduser='.$iduser.'&id='.$id.'&prix_prod='.$total_prix;
$sql="DELETE FROM comend WHERE id_produit =$idproduit";
    $pdo->exec($sql);
    header("location:carteshop.php?".$url);

?>