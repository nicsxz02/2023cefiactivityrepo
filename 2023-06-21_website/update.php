<?php
$data = json_decode(file_get_contents("php://input"));

$id=$data->id;
$fname = $data->fname;
$lname = $data->lname;
$bday = $data->bday;
$age = $data->age;
$sex = $data->sex;
$course =$data->course;
$secret = "akoaycutemagandapogisikatewanslkjfsldjflsdjfdklslkfjsdklfj34985734987dg";
//$pword = md5($data->pword . $secret);



// Create connection
$conn = new mysqli("localhost", "root", "", "dbregistration");


$sql = "UPDATE tblstudents SET fname='$fname', lname='$lname', bday='$bday', sex='$sex', course='$course', age=$age WHERE id=$id";

//var_dump($sql);
//$conn->query($sql);

if(mysqli_query($conn,$sql)){
    echo 1; 
 }else{
    echo 0;
 } 

$conn->close();

//header("Location: https://localhost/xxx/viewstudents.php");
?>