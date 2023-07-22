<?php

session_start();

include 'database.php';

if(isset($_POST['emp_email']) && isset($_POST['emp_pass'])){


$email = $_POST['emp_email'];
$password = $_POST['emp_pass'];

$sql = "SELECT * FROM employee where emp_email='$email' and emp_pass='$password'";

$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query) == 1){


$row = mysqli_fetch_assoc($query);

if($row['emp_email'] === $email && $row['emp_pass'] === $password){

$_SESSION['loginID'] = $row['emp_email'];
$_SESSION['Password'] = $row['emp_pass'];

header('Location:home.php');

}
else{

    echo "Invalid Email or Password 1";
    
    }

}
else{

echo "Invalid Email or Password 2";

}

}
else{


echo "Invalid Input names";


}






?>