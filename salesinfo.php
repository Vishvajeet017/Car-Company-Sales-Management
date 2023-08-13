<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head> 

<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sales";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `sales`";
$result = mysqli_query($conn,$sql);
echo "<table>
  <tr>
    <th>Cid</th>
    <th>Model</th>
    <th>Gear</th>
    <th>Price</th>
    <th>Payment</th>
  </tr>";
while($row = $result->fetch_assoc()){
    echo "
    <tr>
    <td>".$row['cid']."</td>
    <td>".$row['model']."</td>
    <td>".$row['gear']."</td>
    <td>".$row['price']."</td>
    <td>".$row['payment']."</td>
    </tr>";
    
    // echo "<k> Cid : ".$row['cid']."</k> Model : ".$row['model']." Gear : ".$row['gear']." Price : ".$row['price']." Payment : ".$row['payment'];
    
}
echo "</table>";
?>

<!-- '$cid', '$model', '$gear', '$price', ';$payment' -->