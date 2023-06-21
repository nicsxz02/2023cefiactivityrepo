<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "dbregistration");

$id=$_GET['id'];

$sql = "DELETE FROM tblstudents WHERE id=$id";

// $conn->query($sql);
// var_dump($sql);

if(mysqli_query($conn,$sql)){
    echo 1; 
 }else{
    echo 0;
 } 
 
$conn->close();

//header("Location: https://localhost/xxx/viewstudents.php");
?>