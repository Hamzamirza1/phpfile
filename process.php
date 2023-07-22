<?php

include 'database.php';

if(isset($_POST['btn'])){

    $emp_email = $_POST['emp_email'];
    $emp_pass = $_POST['emp_pass'];
$emp_name = $_POST['emp_name'];
$emp_file = $_FILES['emp_file'];

$filename = $emp_file['name'];
$filepath = $emp_file['tmp_name'];
$fileerror = $emp_file['error'];

if($fileerror == 0){

$destfile = 'uploads/'.$filename; 

move_uploaded_file($filepath,$destfile);

$sql = "INSERT into employee(emp_name,emp_file,emp_email,emp_pass) VALUES('$emp_name','$destfile','$emp_email','$emp_pass')";

mysqli_query($conn,$sql);

header('Location:Login.php');

}



}



?>