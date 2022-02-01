<?php
$conn = mysqli_connect("localhost", "root", "", "menuee");
error_reporting(0);
$id=$_GET['a'];

$query="DELETE FROM mycall WHERE id='$id'";

$data=mysqli_query($conn,$query);
;



header("Location: items.php");

?>