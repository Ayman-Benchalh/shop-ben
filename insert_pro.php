<?php
include('condb.php');
if(isset($_POST['submit'])){
    $sql="INSERT INTO  produit(imag_prod,Nam_Produit,desin_pro,contite_prod,Prix_prod)
    VALUES(:imag_prod,:Nam_Produit,:desin_pro,:contite_prod,:Prix_prod)";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(':imag_prod',$_REQUEST['imag_prod']);
    $stmt->bindParam(':Nam_Produit',$_REQUEST['Nam_Produit']);
    $stmt->bindParam(':desin_pro',$_REQUEST['desin_pro']);
    $stmt->bindParam(':contite_prod',$_REQUEST['contite_prod']);
   $stmt->bindParam(':Prix_prod',$_REQUEST['Prix_prod']);
    $stmt->execute();
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add_produit</title>
    <style>
       <?php include('style_addpro.css');
        include('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');?>
    </style>
</head>
<body>
    <div class="container">
   
        <form  method="post">
    
        <div class="content">

         <h1> Add Produit to Shop</h1>

            <div class="content_import">
        <img src="laptop.png"  alt="image produit"></div>
        <label for="image" class='addimage'>Add image prod</label>
        <input type="file" name="imag_prod" id="image" class='image' >
        <label for="Nam_Produit">Name Produit</label>
        <input type="text" name="Nam_Produit" id="Nam_Produit" required placeholder="name produit">
        <label for="desin_pro">desination Produit</label>
        <input type="text" name="desin_pro" id="desin_pro" required placeholder=" desination produit">
        <label for="contite_prod">contite_prod</label>
        <input type="number" name="contite_prod" id="contite_prod" required placeholder="contite produit">
        <label for="Prix_prod">Prix Produit</label>
        <input type="number" name="Prix_prod" id="Prix_prod" required placeholder=" prix produit">
        <button type="submit" name='submit'>Insert produit</button>
        </div>
    </form>
    
    </div>
    <script>
        <?php 
        include('script_insert.js')?>
    </script>
</body>
</html>