<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bday = $_POST['bday'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$course = $_POST['course'];
$secret = "akoaycutemagandapogisikatewanslkjfsldjflsdjfdklslkfjsdklfj34985734987dg";
$pword = md5($_POST['pword'] . $secret);



// Create connection
$conn = new mysqli("localhost", "root", "", "dbregistration");


$sql = "UPDATE tblstudents SET fname='$fname', lname='$lname', bday='$bday', sex='$sex', course='$course', age=$age WHERE id=$id";

var_dump($sql);
$conn->query($sql);

$conn->close();
?>