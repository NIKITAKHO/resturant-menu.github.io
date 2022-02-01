<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
    <table>
    <tr>
    <th>Id</th>
    <th>product_name</th>
    <th>quantity</th>
    <th>date</th>
    <th>table_number</th>
    <th>name</th>
    <th>price</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "menuee");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $query = "SELECT id, product_name,quantity,saved_date,table_number,name,price  FROM mycall";
    $result = $conn->query($query);
   
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["product_name"] . "</td><td>"
        . $row["quantity"]. "</td></tr>". $row["saved_date"] . "</td><td>". $row["table_number"] . "</td><td>". $row["name"] . "</td><td>". $row["price"] . "</td><td>";
}
echo "</table>";
} 
else {
     echo "0 results";
 }
$conn->close();
?>
</table>
</body>
</html>
