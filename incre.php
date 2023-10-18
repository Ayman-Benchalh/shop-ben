<?php
include('condb.php');

if(isset($_POST['submit'])){
    $emil=$_POST['email'];
    $pwd=$_POST['password'];
    $sql2="SELECT * FROM clien WHERE Emai_clien='$emil' AND clien_Pass_word='$pwd' ";
    $result=$pdo->query($sql2);
    if($result->rowcount()>0)
    {
        while($row=$result->fetch()){
            $message='<h2 style="background-color:#fb7633d9 ;border:2px solid #fb7533;"> you have accout </h2> ';
        }
    }else{
            if($_POST['pass_word2']==$_POST['password']){
            $sql="INSERT INTO clien (Nam_clien,Pre_clien,Tele_clien,Emai_clien,clien_Pass_word) 
            VALUES(:Nam_clien, :Pre_clien,:Tele_clien,:Emai_clien,:clien_Pass_word)";
            $stmt=$pdo->prepare($sql);
            $stmt->bindParam(':Nam_clien',$_REQUEST['Nam']);
            $stmt->bindParam(':Pre_clien',$_REQUEST['Pre']);
            $stmt->bindParam(':Tele_clien',$_REQUEST['Tele']);
            $stmt->bindParam(':Emai_clien',$_REQUEST['email']);
            $stmt->bindParam(':clien_Pass_word',$_REQUEST['password']);
                $stmt->execute();
                $message='<h2 style="background-color:#64ff2be2 ; border:2px solid #64ff2be2;"> Account is created</h2> ';
                header('refresh:2;URL=login.php');
            }elseif($_POST['pass_word2']!=$_POST['password']){
                $message='<h2 style="background-color:#ff00009b ;">confimr password incoret</h2> ';
                
            }
        }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrire</title>
    <style><?php include('style_incre.css');?>
    <?php include('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer');?>
</style>
   </head>
<body>
    <div class="container3">
       <div class="container3-1">
        <div class="container3-1-2">
        <div class="container3-1-3">
                    <div class="section-contant3">
                 
                    <div class="message">
                         
                         <?php
                         if(isset($message)){
                             echo $message;
                             
                         }?>
                     </div>
                        <h1>Inscrire</h1>
                       
                        
                        <form  method="post">
                            <div class="cont5">
                            <div class="con3">
                                <label for="first-name">First Name:</label>
                                <input type="text" name="Nam" id="first-name" required placeholder=" your first-name">
                                <label for="last-name">Last Name:</label>
                                <input type="text" name="Pre" id="last-name"  required placeholder=" your last-name">
                                <label for="email">Email :</label>
                                <input type="email" name="email" id="email" required placeholder="your Email ">
                            </div>
                            <div class="con4">
                                <label for="telephone">Telephone :</label>
                                <input type="text" name="Tele" id="telephone" placeholder="your number phone ">
                                <label for="password">Password :</label>
                                <input type="password" name="password" id="password" required  placeholder=" your password">
                                <label for="password2">Confirme Password :</label>
                                <input type="password" name="pass_word2" id="password2" placeholder="confirme password">
                        
                            </div>
                        
                        </div>
                        <div class="bbtn"> <button type="submit" name="submit">Increire New <i class="fa-solid fa-chevron-right"></i> </button>
                        </div>
                        <div class="foote">
                            <p>I have Account ? <a href="login.php">Login new</a></p> 
                         </div>

                        </form>
                    
               
                        </div>
            </div> </div>
        </div>
    </div>
    
</body>
</html>