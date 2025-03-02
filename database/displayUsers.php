<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 

include('bLogic.php');
include_once('template/header.php');
echo"<h1 style='text-decoration:underline;'>User Data</h1></br></br></br>";

echo " <table> 
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Ext.</th>
		<th>Role</th>
		<th>Room No.</th>
		<th>Picture</th>
		<th>Action</th>
	</tr>";
$users= getAllCustomer();
$rooms=getAllRooms();
foreach($users as $user)
{
	echo "<tr>";
	foreach($user as $col => $data)
	{		
		if($col=="image_path")
		{
			echo "<td><img src='$data' ></td>";		
		}else if ($col=="room_id"){
			foreach ($rooms as $room)
			{
				if($room['id']==$data)
				{
					echo "<td>{$room['number']}</td>";
					break;
				}
			}		
		}else
		echo"<td>$data</td>";		
	}
	$id = $user['id'];
	echo"<td><a href='update.php?id=$id'>Update</a></br>
		<a href='delete.php?id=$id'>Delete</a></td>
		</tr>"	;
}
echo " </table>";

include_once('template/footer.php');


