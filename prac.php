<?php
session_start();
// print_r($_COOKIE['name']); exit;
$connect = mysqli_connect('localhost','root','','menuee');
if (isset($_POST['submit'])){
  $name_cus=$_POST['name_cus'];
     $contact=$_POST['contact'];
     $email=$_POST['email'];
    $table_number=$_POST['table_number'];
    
 
$query = "INSERT INTO coustmer ( `coustmer_id`,`name_cus`, `contact`, `email`, `table_number`) VALUES ( '$coustmer_id','$name_cus', '$contact', '$email', '$table_number');";
   
    $result = mysqli_query($connect,$query);
    $_SESSION['table_number']=$table_number;
    $_SESSION['name_cus']=$name_cus;
 
  
   


 $query="SELECT * FROM  coustmer  ORDER BY coustmer_id DESC LIMIT 1";
 $result = mysqli_query($connect,$query);
 $row= mysqli_fetch_array($result);
 //print_r($row);
 //die('not conn');
//if($lastid==" ");
$_SESSION['coustmer_id']= $row['coustmer_id'];

 

 header("Location: http://localhost/new/men.php");
 
 
 $_SESSION['success'] = 'added';

    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "connected successfully";
    }
    
    




?>
<!doctype html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <title>WELCOME TO MY RESTURANT</title>
     <link rel="stylesheet" href="style.css">
<body>
  <div class="contact-form">
          
         <img src="6.jfif" alt="" class="avatar">
         <h2>contact form</h2>
         <form action="prac.php" method="POST" >
         <p>NAME</p>
         <input type="text" placeholder="enter name" name="name_cus">
         <p>CONTACT</p>
         <input type="num" placeholder="enter contact" name="contact" >
         <p>EMAIL</p>
         <input type="email" placeholder="enter email" name="email">
         <p>Table Number</p>
         <input type="num" placeholder="enter table number" name="table_number">
         <input type="submit"  name="submit"  value="submit" class="btn-success">
         
      
       
        </form>
   </div>
</div>
   
</body>
</html>
