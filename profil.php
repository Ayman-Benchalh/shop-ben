<?php
include('condb.php');
$iidi=$_GET['iduser'];
$sql="SELECT * FROM clien WHERE Id_clien =$iidi";
$rsult=$pdo->query($sql);
if($rsult->rowcount()>0){
    while($row=$rsult->fetch())
    {
        $iduser=$row['Id_clien'];
        $nameclien=$row['Nam_clien'];
        $prenclien=$row['Pre_clien'];
        $teleclian=$row['Tele_clien'];
        $emailclien=$row['Emai_clien'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
        include('style_profil.css');
        ?>
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
<div class="container">
        <div class="navbar">
            <h1>Shop_Ben</h1>
            <?php
            echo'<a href="chop.php?iduser='.$iidi.'"><i class="fa-solid fa-house"></i></a>';
            ?>
            
        
    </div>
   <div class="content">
    <h1>Profil Account</h1>
    <img src="user.png" alt="image">
    <label for="id">your ID</label>
   <input type="text"   readonly value="<?php echo $iduser;?>"  id="id">
   <label for="ferstName">ferst Name :</label>
   <input type="text"   readonly  value="<?php echo $nameclien;?>" id="ferstName">
   <label for="LastName">Last Name :</label>
   <input type="text"   readonly  value="<?php echo $prenclien;?>" id="LastName">
   <label for="Telephone">Telephone :</label>
   <input type="text"  readonly  value="<?php echo $teleclian;?>"  id="Telephone">
   <label for="Email">Email :</label>
   <input type="text"  readonly  value="<?php echo $emailclien;?>" id="Email">
   <?php echo '<a href="remov.php?iduser='.$iidi.'"><i class="fa-solid fa-user-slash"></i> Remove Account</a>'?>
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