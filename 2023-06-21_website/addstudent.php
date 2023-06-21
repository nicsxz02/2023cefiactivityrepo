<?php

$data = json_decode(file_get_contents("php://input"));

$fname = $data->fname;
$lname = $data->lname;
$bday = $data->bday;
$age = $data->age;
$sex = $data->sex;
$course =$data->course;
$secret = "akoaycutemagandapogisikatewanslkjfsldjflsdjfdklslkfjsdklfj34985734987dg";
$pword = md5($data->pword . $secret);



// Create connection
$conn = new mysqli("localhost", "root", "", "dbregistration");

$sql = "INSERT INTO tblstudents (fname, lname, bday, sex, course, pword, age)
VALUES ('$fname', '$lname', '$bday', '$sex','$course','$pword', $age)";

//var_dump($sql);
//$conn->query($sql);

if(mysqli_query($conn,$sql)){
    echo 1; 
 }else{
    echo 0;
 }

$conn->close();
?>