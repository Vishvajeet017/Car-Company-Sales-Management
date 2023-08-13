<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con)
{
    die("Connection to the database failed due to".
    mysqli_connect_error());

}
// echo "Success connecting to the database";

$cid = $_POST['cid'];
$model = $_POST['model'];
$gear = $_POST['gear'];
$price = $_POST['price'];
$payment = $_POST['payment'];

$sql = "INSERT INTO `sales`.`sales` (`cid`, `model`, `gear`, `price`, `payment`) VALUES ('$cid', '$model', '$gear', '$price', ';$payment');";

echo $sql;
// $data = mysql_query("SELECT * FROM sales") or die(mysql_error()); 
//   while($row = mysql_fetch_assoc($data)){
//     echo "No: ".$row['No'].", Name:".$row['Name']
//     .", Surname:".$row['Surname']."<br/>";
//     }
if($con->query($sql)==true){
    echo "
    Successfully Inserted";

}

else{
    echo "Error: $sql <br> $con->error";

}

$con->close();
?>

