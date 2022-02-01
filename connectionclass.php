//insert.php
<?php
include('checkboxClass.php');
{
 $query = "INSERT INTO checkbox(name) VALUES ('".$_POST["insert"]."')";
 $result = mysqli_query($conn, $query);
 echo "Data Inserted Successfully!";
}
?>