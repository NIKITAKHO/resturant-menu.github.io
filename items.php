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

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
        .btn-group button 
        {
  background Color: FF 9999px; /* Green background */
  border: 1px solid red; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}
.btn-group button{
    text-align:center;
    margin:10%;
    margin-right:5%;
}
.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}
        
    </style>
</head>

<body>

    <table>
        <tr>
            <th>id</th>
            <th>product_name</th>
            <th>quantity</th>
            <th>table_number</th>
            <th>name_cus</th>
            <th>price</th>
            <th>order_date</th>
            <th>coustmer_id</th>
            <th>operation<th>
            
        </tr>

    

        <?php
          session_start(); 
        if (!isset($_SESSION['coustmer_id'])){
            header("Location:http://localhost:3000/prac.php");
        }

      
        $conn = mysqli_connect("localhost", "root", "", "menuee");
        $coustmer_id = $_SESSION['coustmer_id'];
        //die($coustmer_id);
        
    
        // Check connection
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $query = "SELECT id, product_name,name_cus,table_number,quantity,price,order_date,coustmer_id  FROM mycall WHERE coustmer_id = ".$coustmer_id;
        $result = $conn->query($query);
       // echo "$query";
        //print_r($result);
     

        
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["table_number"] . "</td><td>"
                    . $row["name_cus"] . "</td><td>" . $row["price"] . "</td><td>" . $row["order_date"] . "</td><td>" . $row["coustmer_id"] . "</td><td><a href='dlt.php?a=$row[id]'>DELETE</td></a></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
            
  
    
 <div class="btn-group">
  <button ><a href="thankyou.html">confirm your order</a></button>
  <button ><a href="men.php">back</a></button>
  <button ><a href="cancel.html">cancel your order</a></button>
    </div>
 
</div>
</body>

</html>