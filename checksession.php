<?php

if(!isset($_SESSION['loginID']) && !isset($_SESSION['Password'])){

header('Location:Login.php');
exit();
}



?>