<!doctype html>
<html>
<head>
<title>New Student</title>
<script>
	function oohindi() {
		
	}

</script>

</head>
<body>
<h1>List of Students</h1>


<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "dbregistration");

$sql = "SELECT * FROM tblstudents";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo '<table border="1">';
	echo '<tr><th>ID</th><th>Fistname</th><th>Lastname</th><th>Actions</th></tr>';
    while($row = $result->fetch_assoc()) {
		$r = $row["id"];
		echo "<tr>";
        echo "<td>" . $r . "</td><td>" . $row["fname"]. "</td><td>" . $row["lname"]. "</td>
			<td>
			<a href=\"edit.php?id=$r\">Edit</a>
			<a  onclick=\"return confirm('are you sure?')\" href=\"delete.php?id=$r\">Delete</a>
			</td>";
		echo "</tr>";
    }
	echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>



<body>
</html>