<?php
if(isset($_POST['NAME'])){
  $server = "localhost";
  $username = "root";
  $password = "" ;



  $conn =mysqli_connect($server,$username,$password);
  if(!$conn){
    die("connection to this database failed due to".
    mysqli_connect_error());  
  }
  $NAME=$_POST['a'];
  $CONTACT=$_POST['b'];
  $EMAIL=$_POST['c'];
  $TableNumber=$_POST['d'];
  $sql = "INSERT INTO `mylog'.'mylog` ( `NAME`, `CONTACT`, `EMAIL`, `Table Number`, `date`) VALUES ( '$NAME','$CONTACT', '$EMAIL', '$Table Number', current_timestamp());";
  echo $sql;
   if($conn-->query($sql)==true){
     echo"inserted";

   }else{
     echo"error:$sql<br> $conn-->error";
   }
   $conn-->close;
  }

  ?>

 

  