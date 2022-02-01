
<?php
ini_set(' display error','1');
if(isset($_POST['NAME'])){
  $server = "localhost";
  $username = "root";
  $password = "" ;



  $con =mysqli_connect($server,$username,$password);
  if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());  
  }
  $NAME=$_POST['name'];
  $CONTACT=$_POST['contact'];
  $EMAIL=$_POST['email'];
  $TableNumber=$_POST['tablenumber'];
  $sql = "INSERT INTO `mylog'.'mylog`( `NAME`, `CONTACT`, `EMAIL`, `TableNumber`, `date`) VALUES ( '$NAME','$CONTACT', '$EMAIL', '$TableNumber', $current_timestamp());";
  echo $sql;
   if( $con-->query($sql) == true){
     echo"inserted";

   }else{
     echo"error:$sql <br> $con-->error";
   }
   $con-->close();
  }

  ?>
  <!doctype html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <title>transparent login form with blur background></title>
     <link rel="stylesheet" href="my.css">
</head>
<body>
     <div class="contact-form">
          
          
         <img src="6.JFIF" alt="" class="avatar">
         <h2>contact form</h2>
         <form action="my.php" method="POST" >
         <p>NAME</p>
         <input type="text" placeholder="enter name" name="name" id="name">
         <p>CONTACT</p>
         <input type="num" placeholder="enter contact" name="contact" id="contact" >
         <p>EMAIL</p>
         <input type="email" placeholder="enter email" name="email" id="email">
         <p>TableNumber</p>
         <input type="num" placeholder="enter table number" name="table number" id="table number">
         <button class="btn">SUBMIT</button><br><br>
         
     
        <a><p><a href="1.html"> CLICK HERE TO GO FOR FOOD </a></p></a>
       
        </form>
   </div>
   
</body>
</html>

 



 

  