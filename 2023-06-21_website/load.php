<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "dbregistration");
$id = $_GET['id'];
$sql = "SELECT * FROM tblstudents WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$data = array( "data" => array(
"id" => $row["id"],
"fname" => $row["fname"],
"lname" => $row["lname"],
"bday" => $row["bday"],
"age" => $row["age"],
"sex" => $row["sex"],
"course" => $row["course"]
));

echo json_encode($data);

?>