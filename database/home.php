<head>
	<style>
		body,a{
			text-align:center;
			margin-top:10%;
			color:#2973B2;
		}	
		input[type=submit],input[type=reset]{
		    background-color: #2973B2;
			color:white;
			width:100px;
			height:40px;
			font-size:18px;
		}
	</style>
</head>

<h1>Cafeteria</h1>

<form method="post" action="">
        <input type="hidden" id="user-id" name="user-id">

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" tabindex="2" ><br><br>

        <label for="password">Password </label><br>
        <input type="password" id="'password" name="password" tabindex="3"><br><br>
	
        <input type="submit" id="submit" name="submit" value="Log in" tabindex="8">

</form>

	<div>
		<a href="#">Forget Passward?</a>
	</div>

<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();


$user=['ali@gmail.com','123','ali'];

if(isset($_POST['submit']))
{
	if($_POST['email']==$user[0] and $_POST['password']==$user[1])	
	{
		$_SESSION['username']=$user[2];
		header("Location: addUser.php");
 		exit;
	}
}
