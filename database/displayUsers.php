<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 

include('bLogic.php');
include_once('template/header.php');
echo"<h1 style='text-decoration:underline;'>User Data</h1></br></br></br>";

echo " <table> 
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Ext.</th>
		<th>Role</th>
		<th>Room No.</th>
		<th>Picture</th>
		<th>Action</th>
	</tr>";
$users= getAllCustomer();
foreach($users as $user)
{
	echo "<tr>";
	foreach($user as $col => $data)
	{
		if($col=="image_path")
		{
			echo "<td><img src='$data' ></td>";		
		}else
		echo"<td>$data</td>";		
	}
	$email = $user['email'];
	echo"<td><a href='update.php?email=$email'>Update</a></br>
		<a href='delete.php?email=$email'>Delete</a></td>
		</tr>"	;
}
echo " </table>";

include_once('template/footer.php');


