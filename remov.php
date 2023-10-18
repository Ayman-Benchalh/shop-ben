<?php

include('condb.php');

$iduser=$_GET['iduser'];

$url='iduser='.$iduser.'&id='.$id.'&prix_prod='.$total_prix;
$sql="DELETE FROM clien WHERE Id_clien =$iduser";
    $pdo->exec($sql);
    header("location:index.php");

?>