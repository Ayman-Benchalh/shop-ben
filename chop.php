<?php
include('condb.php');
$iduser=$_GET['iduser'];

$sql7="SELECT * FROM comend WHERE id_clien=$iduser";
                $ressul7=$pdo->query($sql7);
                $reed =$ressul7->rowcount();
                if($ressul7->rowcount()>0){
                   
                    while($row7=$ressul7->fetch()){
                
                       /* $idll+= $row7[1];
                       */
                      /*  $sql5="SELECT * FROM produit WHERE ID_produit=$idp";
                        $result5=$pdo->query($sql5);
                        if($result5->rowcount()>0){
                            while($row5=$result5->fetch()){
                            echo '<tr>';
                            echo'<td> <img src="'.$row5['imag_prod'].'" width="30px" alt="image"></td>';
                            echo  '<td>'.$row5['Nam_Produit'].'</td>';
                            echo '</tr>';
                            }
                        }
                       */
                      
                    }
                    /*
                        echo '<pre>';
                        print_r($idll);
                        echo '<pre>';*/
                    
                }
                
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop_ben</title>
    <style>
       <?php include('style_chop.css');
        ?>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
<div class="container">
<div class="navbar">
        <h1><a href="index.php" ><i class="fa-solid fa-right-from-bracket fa-rotate-180"></i> Shop_Ben</a></h1>
        
        <?php echo"<a class='nab_img' href='profil.php?iduser=".$iduser."'><img src='user.png' alt='image'></a>";?>
        
</div>
    <div class="content">
    <div class="content_cart">
        <h1>All Prodcet <span><a <?php echo 'href="carteshop.php?iduser='.$iduser.'&id=0&prix_prod=0"';?>><i class="fa-solid fa-cart-shopping"></i><span><?php echo $reed;?></span></i></a></span></h1>
        
        <div class="content_cart1">
        
        <?php
        $sql="SELECT * FROM produit";
        $resutl=$pdo->query($sql);
        if($resutl->rowcount()>0){
            while($row=$resutl->fetch())
            {
                echo'<div class="cart cart1">';
                echo '<img src="'.$row['imag_prod'].'" alt="image" width="20%">' ;
                echo '<p>'.$row['Nam_Produit'].'</p>';
                echo '<p class="prixx"> Prix '.$row['Prix_prod'].'.DH</p>';
                echo'<form method="post">';
                echo'<div class="buton2">';
                echo '<button name="viewpro"><a href="view_pro.php?iduser='.$iduser.'&id='.$row['ID_produit'].'" id="but1">';
                echo '<i class="fa-solid fa-eye"></i> View Produit</a></button>';
                echo '<button type="submit"><a  id="but2" href="insert2.php?iduser='.$iduser.'&id='.$row['ID_produit'].'&prix_prod='.$row['Prix_prod'].'" ><i class="fa-solid fa-plus"></i> Add to Cart</a> </button>';
                echo'</div>';
                echo'</form>';
                echo'</div>';
               /* echo'';*/
                $prix_prod=$row['Prix_prod'];
                $id_prduit=$row['ID_produit'];
            }
        }
      
   ?>
        </div>
        </div>
        <!--
        <div class="content_shop">
            <div class="herrd"><h1><i class="fa-solid fa-shop"></i> Your prodact </h1></div>
            
            <table border="1">
                <thead>
                <tr><th><i class="fa-solid fa-store"></i></th>
                <th>Name Produit</th></tr>
                </thead>
            <tbody >
                

            </tbody>
            </table>
            <div class="foerrt">
          
           </div>
            
        </div>
    </div>
   -->

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