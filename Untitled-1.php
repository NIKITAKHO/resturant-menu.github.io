<?php
echo "welcome";
$servername="localhost";
$username="root";
$password="";


$conn = mysqli_connect($servername,$username,$password);

$sql = "CREATE DATABASE dbharry2";
$result=mysqli_query($conn,$sql);
echo "thid is".$result;

if(!$conn){
    die ("sorry we failed:".mysqli_connect_error());
}
else{
    echo"sucess";

}
?>