<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "dbregistration");

$sql = "SELECT * FROM tblstudents";
$result = $conn->query($sql);

$records  = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$records[] = array(
			"id" => $row["id"],
			"fname" => $row["fname"],
			"lname" => $row["lname"],
			"bday" => $row["bday"],
			"age" => $row["age"],
			"sex" => $row["sex"],
			"course" => $row["course"]
			);
    }
}
$conn->close();
$data = array( "data_all" => $records ); 
echo json_encode($data);
?>
