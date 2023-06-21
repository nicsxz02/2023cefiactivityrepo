<!doctype html>
<html>
<head>
<title>New Student</title>
</head>
<body>
<h1>Welcome new user</h1>
<form action="addstudent.php" method="post">
<label>Lastname: <input type="text" name="lname" placeholder="Type lastname here"></label><br>
<label>Firstname: <input type="text" name="fname" placeholder="Type firstname here"></label><br>
<label>Password: <input type="password" name="pword" placeholder="Type password here"></label><br>
<label>Birthday: <input type="date" name="bday" placeholder="Type lastname here"></label><br>
<label>Age: <input type="number" name="age" placeholder="Type lastname here"></label><br>
Gender:
<label><input type="radio" name="sex" value="M" required="required"> Male</label><br>
<label><input type="radio" name="sex" value="F" required="required"> Female</label><br>
<label>Course: 
	<select name="course" required="required">
		<option> - Select a course - </option>
		<option value="bsba">Bachelor of Science in Business Administation</option>
		<option value="bsit">Bachelor of Science in Information Technology</option>
		<option value="bscs">Bachelor of Science in Computer Science</option>
		<option value="mit">Master in Infro Tech.</option>
		<option value="dit">Doctor in IT</option>
	</select>

</label><br>
<input type="submit" value="Register">
</form>

<body>
</html>