<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 

include_once('config.php');
include_once('database.php');
include_once('user.php');

$config = new Config('localhost', 'root', 'rootroot', 'php');
$db = new Database($config);
$userObj = new User($db);

$id= $_GET['id'];
$user= $userObj->getCustomer($id);
$userObj->deleteCustomer($id);
header('Location: displayUsers.php');

?>
