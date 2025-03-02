<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 

include('bLogic.php');

$errors=[];

if(isset($_POST['submit']))
{
	$filePath="uploads/".basename($_FILES['pic']['name']);
	$uploadOK=1;
	$check=getimagesize($_FILES['pic']['tmp_name']);
	if($check==false)
	{
		$uploadOK=0;
		echo "1";
	}else{
		$uploadOK=1;
	}
	if($_FILES['pic']['size']>1000000)
	{
		$uploadOK=0;
		echo "2";
	}
	if(file_exists($filePath))
	{
		$uploadOK=0;
		echo "File Exists";
	}

	if($uploadOK==0)
	{
		echo "File Was Not Uploaded";
	}else{
		if(!move_uploaded_file($_FILES['pic']['tmp_name'], $filePath)) {echo "File Was Not Uploaded";}
	}
}

if(empty($_POST['name']))
{
	$errors[]="Please enter your name";
}else{
	$name= trim($_POST['name']);
	if(!preg_match("/^[a-zA-Z0-9_]{2,20}$/",$name))
	{
		 echo "Username must be 2-20 characters long and can only contain letters, numbers, and underscores.";
	}
}

if(empty($_POST['email']))
{
	$errors[]="Please enter your email.";
}else{
	$email= filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		 echo "Invalid Email.";
	}
}


if(empty($_POST['room']))
{
	$errors[]="Please enter your room";
}

if(empty($_POST['ext']))
{
	$errors[]="Please enter your ext";
}else{
	$ext= trim($_POST['ext']);
	if(!preg_match("/^[0-9_]{4}$/",$ext))
	{
		 echo "Ext. must be a four digit number.";
	}
}

if(empty($errors))
{		
	$pic_path = "uploads/".basename($_FILES['pic']['name']);
	updateCustomer($_GET['id'],$_POST['name'], $_POST['email'], $_POST['ext'], $_POST['room'], $pic_path);
	header('Location: displayUsers.php');
}else{
	foreach ($errors as $error)
	{
		$_SESSION['errors'] = $errors;
			 
	}
}


?>
