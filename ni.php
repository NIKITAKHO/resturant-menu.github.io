<?php

$servername="localhost";
$username="root";
$password="";


$conn = mysqli_connect($servername,$username,$password);

$sql = "CREATE DATABASE dbharry2";
$result=mysqli_query($conn,$sql);
echo "$result";


?>