<!doctype html>
<html>
<head>
<title>Edit Student</title>
</head>
<body>
<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "dbregistration");
$id = $_GET['id'];
$sql = "SELECT * FROM tblstudents WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$fname = $row["fname"];
$lname = $row["lname"];
$bday = $row["bday"];
$age = $row["age"];
$sex = $row["sex"];
$course = $row["course"];

?>


<h1>Welcome new user</h1>
<form action="updatestudent.php" method="post">
<input type="hidden" name="id" value="<?=$id?>">
<label>Lastname: <input type="text" name="lname" value="<?=$lname?>" placeholder="Type lastname here"></label><br>
<label>Firstname: <input type="text" name="fname" value="<?php echo $fname?>" placeholder="Type firstname here"></label><br>
<label>Birthday: <input type="date" name="bday" value="<?php echo $bday?>"  placeholder="Type lastname here"></label><br>
<label>Age: <input type="number" name="age" value="<?php echo $age?>"  placeholder="Type lastname here"></label><br>
Gender:
<label><input type="radio" name="sex" value="M" required="required" <?php if($sex=="M") echo "checked"?>> Male</label><br>
<label><input type="radio" name="sex" value="F" required="required"<?php if($sex=="F") echo "checked"?>> Female</label><br>
<label>Course: 
	<select name="course" required="required">
		<option> - Select a course - </option>
		<option <?=$course=="bsba"?"selected":""?> value="bsba">Bachelor of Science in Business Administation</option>
		<option <?=$course=="bsit"?"selected":""?> value="bsit">Bachelor of Science in Information Technology</option>
		<option <?=$course=="bscs"?"selected":""?> value="bscs">Bachelor of Science in Computer Science</option>
		<option <?=$course=="mit"?"selected":""?> value="mit">Master in Infro Tech.</option>
		<option <?=$course=="dit"?"selected":""?> value="dit">Doctor in IT</option>
	</select>

</label><br>
<input type="submit" value="Update">
</form>

<body>
</html>