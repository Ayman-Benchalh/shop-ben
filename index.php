<?php
include('condb.php');

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $sql1="SELECT * FROM message_clien WHERE mess_email='$email'";
    $result=$pdo->query($sql1);
    if($result->rowcount()>0){
        while($row=$result->fetch())
        {
            if($row['mess_email']==$email){
                $message='<h2>you are send message in last time</h2>';
                
            }elseif($row['mess_email']!=$email){
                $sql="INSERT INTO message_clien(messa_name,mess_email,content_mess)
                        VALUES(:messa_name,:mess_email,:content_mess)";
                        $stmt=$pdo->prepare($sql);
                        $stmt->bindParam(':messa_name',$_REQUEST['username']);
                        $stmt->bindParam(':mess_email',$_REQUEST['email']);
                        $stmt->bindParam(':content_mess',$_REQUEST['message']);
                        $stmt->execute();
                       $message='<h2>Message is send to admin</h2>';
            }
        }
    }else{
        $sql="INSERT INTO message_clien(messa_name,mess_email,content_mess)
        VALUES(:messa_name,:mess_email,:content_mess)";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(':messa_name',$_REQUEST['username']);
        $stmt->bindParam(':mess_email',$_REQUEST['email']);
        $stmt->bindParam(':content_mess',$_REQUEST['message']);
        $stmt->execute();
       $message='<h2>Message is send to admin</h2>';

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
        <?php include('style.css')?>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="navbar"id="nav">
            <h1>SHop_Ben</h1>
            <div class="nav" id="navvv">
                <div class="cont1">
                    <ul>
                        <li><a href="#conett" id="homeicon"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="login.php"> <i class="fa-regular fa-user"></i> Login</a></li>
                        
                        <li><a href="incre.php"><i class="fa-solid fa-user-plus"></i> inscrire</a></li>
                        <li><a href="#Contact"><i class="fa-solid fa-phone"></i> Contact</a></li>
                    </ul>
                </div>
              
                <label for="checkbox" id="chek" class="bar"> 
                    
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <input type="checkbox" id="checkbox">
            </div>

        </div>
        <div class="cont">
            <ul>
                <li><a href="#conett"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="login.php"> <i class="fa-regular fa-user"></i> Login</a></li>
                
                <li><a href="incre.php"><i class="fa-solid fa-user-plus"></i> inscrire</a></li>
                <li><a href="#Contact"><i class="fa-solid fa-phone"></i> Contact</a></li>
            </ul>
        </div>
        <div class="content">
        <div class="section">
            <div class="contennt1">
            <h2>Shop New</h2>
            <p class="para1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, facere molestias. Ratione necessitatibus neque aspernatur.</p>
            <a class="btn" href="login.php">Login new <i class="fa-solid fa-angles-right"></i></a>
        </div>
        <div class="contennt2">
            <img src="phone1.png"  alt="image">
            </div>
        </div>
    </div>
  
    </div>
    <div class="container2" id="conett">
        <div class="container-prin">
            <p  class="tilet">Prodact</p>
            <div class="content-carte">
                <div class="cart cart1">
                    <img src="pro1.png" alt="image Iphone">
                    <p> Iphone 12 Pro </p>
                    <a href="login.php"> <i class="fa-solid fa-cart-shopping"></i> shop new</a>
                </div>
                <div class="cart cart2">
                    <img src="pro2 (2).png" id="img2" alt="image">
                    <p> MacBook Pro </p>
                    <a href="login.php"> <i class="fa-solid fa-cart-shopping"></i> shop new</a>
                    
                </div>
                <div class="cart cart3">
                    <img src="pro3.png" alt="image">
                    <p> iPad pro </p>
                    <a href="login.php"> <i class="fa-solid fa-cart-shopping"></i> shop new</a>
                </div>
                <div class="cart cart4">
                    <img src="pro4.png" alt="image">
                    <p> AirPods pro </p>
                    <a href="login.php"> <i class="fa-solid fa-cart-shopping"></i> shop new</a>
                </div>
                <div class="cart cart5">
                    <img src="pro5.png" alt="image">
                    <p> Camera Canon </p>
                    <a href="login.php"> <i class="fa-solid fa-cart-shopping"></i> shop new</a>
                </div>
                <div class="cart cart6"> 
                     <img src="pro6.png" alt="image">
                    <p> Casques udio </p>
                    <a href="login.php"> <i class="fa-solid fa-cart-shopping"></i> shop new</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container3">
        <div class="title"><h1 id="Contact" >Contact</h1></div>
                           
          <form  method="post">
              
                      <div class="foorm">
                      <div class="mesg-from">
                               <?php if(isset($message))
                              {
                                  echo $message;
                              }?> 
                              
                              </div>
                          <div class="cont-form">
                              
                              <div class="parti1">
                              <h2>your info</h2>
                                  <label for="username">User Name :</label>
                                  <input type="text" name="username" placeholder="User Name " id="username">
                                  <label for="email">Email :</label>
                                  <input type="email" name="email"  placeholder="Email " id="email">
                              </div>
                              <div class="parti2"> 
                                  
                                  <label for="message">Message :</label>
                                  <textarea name="message" id="message" cols="50" rows="10">your message</textarea>
                                  
                                  <button type="submit"name='submit' > Send your Message  <i class="fa-regular fa-paper-plane"></i></button></div>
                              
                              </div> 
                      </div>
          </form>
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
    
    <script><?php include('script.js')?></script>
</body>
</html>