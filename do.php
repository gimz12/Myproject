<?php
include 'con.php';

$name = $_POST["name"];
$des =$_POST["des"];
$indate =$_POST["indate"];
$outdate =$_POST["outdate"];
$cost =$_POST["cost"];

$sql = "INSERT INTO Cust_info
(cust_name, des, indate, outdate, cost) 
VALUES ('$name', '$des', '$indate', '$outdate', '$cost')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>