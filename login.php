<?php
include('condb.php');


if(isset($_POST['submit2']) ){
    
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    $sql= "SELECT * FROM clien WHERE Emai_clien='$email' ";
    $result=$pdo->query($sql);
    if($result->rowcount()>0)
    {
        
        while($row =$result->fetch()){
            if($row['Emai_clien']==$email)
            {   if($row['clien_Pass_word']==$pwd){
                 $idUser=$row['Id_clien'];
                $nam=$row['Nam_clien'];
                $pre=$row['Pre_clien'];
                $email=$row['Emai_clien'];
                $pwd=$row['clien_Pass_word'];
                header('refresh:1;url=chop.php?iduser='.$idUser);
                $message='<h2 style="background-color:#64ff2be2 ; border:2px solid #64ff2be2;"> Password Is corrcet</h2> ';
                break;
                }elseif($row['clien_Pass_word']!=$pwd){
                    $message='<h2 style="background-color:#ff00009b ;"> Passwors Incorrcet </h2> ';
                }
               
            }else{
                $message='<h2 style="background-color:#ff00009b ;">You dont have accout register ! </h2> ';
            }
          
                

        }
    }else
    {
       
        $message='<h2 style="background-color:#ff00009b ;">You dont have accout register ! </h2> ';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
       <?php include('style_login.css');
        include('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');?>
    </style>
   
   </head>
<body>
    <div class="container2">
        <div class="section-contant-2">
        <div class="section2">
        <div class="section2-1">
                   <div class="cont1">
                        <img src="Computer login-rafiki.svg" alt="image">
                    </div>
                    <div class="cont2">
                      
                    <h1>LOGIN</h1>  <div class="message">
                            <?php
                            if(isset($message))
                            {
                                echo $message;
                            }?>
                           
                        </div> 
                        <form  method="post">
                            <label for="email">Email :</label>
                            <input type="email" name="email" id="email" required placeholder=" your email">
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password" required placeholder=" your email">

                            <button type="submit" name="submit2">Login new <i class="fa-solid fa-chevron-right"></i> </button>
                        </form>
                        <div class="foote">
                           <p>I don't have Account ? <a href="incre.php">inscrier new</a></p> 
                        </div>
                    </div>
                    </div>     
           
    </div>
    
</body>
</html>