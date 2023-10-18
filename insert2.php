<?php
include('condb.php');
$iduser=$_GET['iduser'];
    $id=$_GET['id'];
    $contute=1;
    $total_prix=$_GET['prix_prod'];
    $totelpri=$contute*$total_prix;

    if(isset($_GET['id'])){
        $sql1="SELECT * FROM comend WHERE id_clien=$iduser AND id_produit=$id";
        $result1=$pdo->query($sql1);
        if($result1->rowcount()>0){
           header("location:chop.php?iduser=".$iduser);
          
        }else{
             $sql="INSERT INTO comend(id_clien,id_produit,contute,total_prix)
        VALUES(:id_clien,:id_produit,:contute,:total_prix)";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(':id_clien',$_REQUEST['iduser']);
        $stmt->bindParam(':id_produit',$_REQUEST['id']);
        $stmt->bindParam(':contute',$contute);
        $stmt->bindParam(':total_prix',$totelpri);
        $stmt->execute();
        echo'ppppp';
          header("location:chop.php?iduser=".$iduser);
        }
       
    }
?>

