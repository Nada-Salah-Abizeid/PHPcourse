<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 

include_once('config.php');
include_once('database.php');
include_once('user.php');
include_once('room.php');

$config = new Config('localhost', 'root', 'rootroot', 'php');
$db = new Database($config);
$userObj = new User($db);
$roomObj= new Room($db);


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
<h1>Update User</h1>
<body>
<?php 
$id= $_GET['id'];
$user= $userObj->getCustomer($id);
?>
<form method="post" action="<?php echo 'updateValidaton.php?id='.$id ;?>" enctype="multipart/form-data">
        <input type="hidden" id="user-id" name="user-id">

        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" tabindex="1" value ="<?php echo $user[0]['name']; ?>" autofocus ><br><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" tabindex="2" value ="<?php echo $user[0]['email']; ?>"> <br><br>

        <label for="room">Room no.</label><br>
	<select name="room" id="room" tabindex="5">
	<?php
		$rooms=$roomObj->getAllRooms();
		foreach ($rooms as $room) {
			if ($room['id']==$user[0]['room_id'])
				echo "<option value='".$room['id']."' selected>".$room['number']."</option>";
			else
				echo "<option value='".$room['id']."'>".$room['number']."</option>";
        	}
	?>
	</select>
	</br></br>

        <label for="ext">Ext.</label><br>
        <input type="text" id="ext" name="ext" tabindex="6" value ="<?php echo  $user[0]['ext']; ?>" ><br><br>

	<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        <label for="pic">Profile Picture</label><br>
        <input type="file" id="pic" name="pic" tabindex="7" value ="<?php echo $user[0]['image_path']; ?>"><br><br>
	</br></br>

        <input type="submit" id="update" name="update" value="Update"  tabindex="8">
        <input type="reset" id="reset" name="reset" tabindex="9">



</form>
	<div id="btn"><input type="button" id="displayUsers" name="displayUsers" value="Display All Users"  tabindex="9" onclick="window.location.href='displayUsers.php';"></div>
</body>

<?php
include_once('template/footer.php');





















?>
