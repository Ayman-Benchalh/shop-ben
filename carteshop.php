<?php
include('condb.php');
    $iduser=$_GET['iduser'];
    $id=$_GET['id'];
    $contute=1;
    $total_prix=$_GET['prix_prod'];
    $totelpri=$contute*$total_prix;

 /*   if(isset($_GET['id'])){
        $sql1="SELECT * FROM comend WHERE id_produit=$id";
        $result1=$pdo->query($sql1);
        if($result1->rowcount()>0){
           
        }else{
             $sql="INSERT INTO comend(id_clien,id_produit,contute,total_prix)
        VALUES(:id_clien,:id_produit,:contute,:total_prix)";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(':id_clien',$_REQUEST['iduser']);
        $stmt->bindParam(':id_produit',$_REQUEST['id']);
        $stmt->bindParam(':contute',$contute);
        $stmt->bindParam(':total_prix',$totelpri);
        $stmt->execute();
        }
       
    }*/
    $sql3="SELECT * FROM clien WHERE Id_clien=$iduser";
    $result4=$pdo->query($sql3);
    if($result4->rowcount()>0){
        while($row3=$result4->fetch())
        {
           $userName=$row3['Nam_clien'];
           $lastName=$row3['Pre_clien'];

        }
    }
           
        




   
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You cart </title>
    <style>
       <?php include('carteshop.css');
        ?>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   
</head>
<body>
    <div class="container">
    <div class="navbar">
    <h1><a id='ah1r'href="<?php echo 'chop.php?iduser='.$iduser;?>"><i id='i1' class="fa-solid fa-house"></i> Shpe_Ben</a></h1>
            <?php echo"<a href='profil.php?iduser=".$iduser."'><img src='user.png' alt='image'></a>";?>
            </div>
    <div class="content1">
        <div class="herdere">
        <h1>Your Total Product <i class="fa-solid fa-cart-shopping"></i></h1>
        <p><i class="fa-regular fa-user"></i> Mr, <?php echo $userName;?></p>
        </div>
        <div class="coonte">
            <table border='1'>
               <thead>
               <tr>
                    
                    <th>Image Produit</th>
                    <th>Name Produit</th>
                    <th>contute</th>
                    <th>Prix</th>
                    <th>Delete </th>
                </tr>

               </thead> 
                <tbody>
                    <?php
                    $priw=0;
                    $sql2="SELECT * FROM comend WHERE id_clien=$iduser ";
                    $result2=$pdo->query($sql2);
                    
                    if($result2->rowcount()>0){
                        while($row2=$result2->fetch())
                        {   echo'<tr>';
                            
                            $idp=$row2['id_produit'];
                            /* $priw=$row2['total_prix'];*/
                            $sql5="SELECT * FROM produit WHERE ID_produit=$idp";
                            $result5=$pdo->query($sql5);
                            if($result5->rowcount()>0){
                                while($row5=$result5->fetch()){
                                echo'<td> <img src="'.$row5['imag_prod'].'" width="45px" alt="image"></td>';
                                echo  '<td>'.$row5['Nam_Produit'].'</td>';
                                }
                            }

                            echo '<td>'.$row2['contute'].'</td>';
                            echo '<td>'.$row2['total_prix'].'</td>';
                            echo '<td><a  href="deleteement.php?iduser='.$iduser.'&id='.$id.'&prix_prod='.$total_prix.'&idproduit='.$idp.'"><i class="fa-solid fa-trash" id="delete"></i>  Delete </a></td>';
                          
                           
                            echo  '</tr>';
                            
                            
                            
                           
                            
                        }
                        
                    }
                  
                    ?>
                </tbody>
              
            </table>

        </div>
        <div class="footer">
            <?php
            $sql="SELECT total_prix  FROM comend WHERE id_clien=$iduser";
            $result6=$pdo->query($sql);
            $rettd=0;
            if ($result6->rowcount()>0) {
                while($row6=$result6->fetch())

                {   
                    
                    
                $row6['total_prix'];
                  $rettd = $rettd+$row6['total_prix'];
                 
                }
                
            }
            ?>
        <h1>Total prix : <?php echo $rettd;?> dh</h1>
        <button type="submit" class='btn'> <i id="mony" class="fa-solid fa-sack-dollar"></i> Pay New</button>
        </div>
        
</div>
</div>
<div class="container4">
        <h1><i class="fa-regular fa-hand"></i></h1>
        <div class="conaaint">
        <div class="conteeent"> 
            <a href="tel:+212710317523"><i class="fa-solid fa-phone"></i> hellp!!</a>
        </div>
        <div class="copyrght"><a href="https://www.facebook.com/ayman.benchalh.3">copyright @ Aymanbenchalh</a></div>
        <div class="scoliamida">
            <a href="https://www.facebook.com/ayman.benchalh.3"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/aymnabbenchalh/"><i class="fa-brands fa-instagram"></i></a>
            <a href="mailto:aymanbenchalh53@gmail.com"><i class="fa-regular fa-envelope"></i></a>
            <a href="https://github.com/AymanBnechalh"><i class="fa-brands fa-github"></i></a>
        </div>
    </div>
    </div>

   
</body>
</html>