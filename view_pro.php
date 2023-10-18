<?php 
include('condb.php');
$id=$_GET['id'];
$iduser=$_GET['iduser'];


$sql="SELECT * FROM produit WHERE ID_produit ='$id' ";
$result=$pdo->query($sql);
if($result->rowcount()>0):
    while($row=$result->fetch()):
        $total_prix=$row['Prix_prod'];

if(isset($_POST['adds'])){
                                
$contute=$_POST['contite'];
                               
$totelpri=$contute*$total_prix;
$url='iduser='.$iduser.'&id='.$id.'&prix_prod='.$totelpri;
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
                
    header("location:carteshop.php?".$url); 
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Product</title>
    <style>
        <?php include('style_viewprod.css')?>
    </style>
  
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
<div class="container">
    <div class="navbar">
            <h1><a id='ah1r'href="<?php echo 'chop.php?iduser='.$iduser;?>"><i id='i1' class="fa-solid fa-house"></i> Shop_Ben</a></h1>
            <?php 
            
          
            echo"<a href='profil.php?iduser=".$iduser."'><img src='user.png' alt='image'></a>";
            ?>
        
    </div>
   
    <div class="content1">
        <div class="parti1">
            <div class="partie1-1">
                <?php
                echo'<img id="img" src="'.$row['imag_prod'].'" alt="image" >';
                ?>
                
            </div>
        </div>
        <div class="parti2">
        <div class="partie2-1">
                <div class="content_parti">
                <?php
        
                           /* echo $row['ID_produit'];
                            echo $row['imag_prod'];
                            echo $row['Nam_Produit'];
                            echo $row['desin_pro'];
                            echo $row['contite_prod'];
                            echo $row['Prix_prod'];*/
                            echo'<h1>'.$row['Nam_Produit'].'</h1>';
                            echo'<p> Color : '.$row['desin_pro'].'</p>';
                            echo'<p> stock : '.$row['contite_prod'].'</p>';
                            echo'<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum, at.<p>';
                           echo'<h2> Prix : '.$row['Prix_prod'].' DH </h2>';
                          
                           $total_prix=$row['Prix_prod'];
                endwhile;
            endif;
                       


                ?>
                    <form  method="post">
                    <div class="content_contite">
                    <h2>Contite :</h2>
                    <input type="number" name="contite"  placeholder="contite" min="1" max="5" value ="1"id="contite">
                    </div>
                    
                    <button type="submit" name="adds"><i class="fa-solid fa-cart-plus"></i>Add to carte</button>
                    </form>
                    
                </div>
        </div>
        </div>
    </div>
    <div class="container2">
        <div class="content2-1">
            <h1>Ather Product</h1>
        </div>
        <div class="content2-2">
            <div class="content-cart">
                <?php 
                $sql="SELECT * FROM produit LIMIT 5";
                $result=$pdo->query($sql);
                if($result->rowcount()>0){
                    while($row=$result->fetch()){
                        echo'<div class="carte ">';
                        echo '<a href="view_pro.php?iduser='.$iduser.'&id='.$row['ID_produit'].'"><img id="img" src="'.$row['imag_prod'].'" alt="image" ></a>';
                        echo  '</div>';
                    }
                }
                
               
                
                ?>
              <!--  <div class="carte carte1"><a href="#"><img src="pro1.png" alt="image"></a></div>
                <div class="carte carte2"><a href="#"><img src="pro2.png" alt="image"></a></div>
                <div class="carte carte3"><a href="#"><img src="pro3.png" alt="image"></a></div>
                <div class="carte carte4"><a href="#"><img src="pro4.png" alt="image"></a></div>
                <div class="carte carte5"><a href="#"><img src="pro5.png" alt="image"></a></div>-->
              

            </div>
        </div>


    </div>
    <div class="container3">
        <h1>Comment</h1>
    <?php
    if(isset($_POST['submit'])){
        if($_POST['commenter']!=""){
        $sql="INSERT INTO  commenter(Id_clien,id_produit ,commenter)
        VALUES(:Id_clien,:id_produit,:commenter)";
            $stmt=$pdo->prepare($sql);
            $stmt->bindParam(':Id_clien',$iduser);
            $stmt->bindParam(':id_produit',$id);
            $stmt->bindParam(':commenter',$_REQUEST['commenter']);
            $stmt->execute();
    }}
    ?>
   
        <div class="newcoment">
           
            <form method="post">
                <textarea name="commenter"  cols="150" rows="5">Your comment or problem</textarea><br>
                <button type="submit" name='submit'>submit</button>
            </form>
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