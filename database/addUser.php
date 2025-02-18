<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 

include('bLogic.php');
include_once('template/header.php');
?>
<head>
	<style>
		form{
			margin-left:1%;
		}	
		h1{
			margin-left:3%;
		}
	</style>
</head>
<h1>Add User</h1>
<body>
<form method="post" action="validation.php" enctype="multipart/form-data">
        <input type="hidden" id="user-id" name="user-id">

        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" tabindex="1" autofocus ><br><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" tabindex="2" ><br><br>

        <label for="password">Password </label><br>
        <input type="password" id="password" name="password" tabindex="3"><br><br>
	
	<label for="cPassword">Confirm Password </label><br>
        <input type="password" id="cPassword" name="cPassword" tabindex="4"><br><br>

        <label for="room">Room no.</label><br>
	<select name="room" id="room" tabindex="5">
	<?php
		$rooms=getAllRooms();
		foreach ($rooms as $room) {
			echo "<option value='".$room['id']."'>".$room['number']."</option>";
        	}
	?>
	</select>
	</br></br>

        <label for="ext">Ext.</label><br>
        <input type="text" id="ext" name="ext" tabindex="6" ><br><br>

	<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        <label for="pic">Profile Picture</label><br>
        <input type="file" id="pic" name="pic" tabindex="7" ><br><br>
	</br></br>

        <input type="submit" id="submit" name="submit" value="Submit"  tabindex="8">
        <input type="reset" id="reset" name="reset" tabindex="9">



</form>
	<div id="btn"><input type="button" id="displayUsers" name="displayUsers" value="Display All Users"  tabindex="9" onclick="window.location.href='displayUsers.php';"></div>
</body>

<?php
include_once('template/footer.php');





















?>
