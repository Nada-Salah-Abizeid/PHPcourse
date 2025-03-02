<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 

include('bLogic.php');

$id= $_GET['id'];
$user= getCustomer($id);
deleteCustomer($id);
header('Location: displayUsers.php');






















?>
