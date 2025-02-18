<?php

include_once('database.php');

function insertCustomer($name, $email, $password, $ext, $role, $room_id, $pic_path)
{
	$password_hash = password_hash($password, PASSWORD_DEFAULT);
	$values=array($name, $email, $password_hash, $ext, $role, $room_id, $pic_path);
	$columns=array("name", "email", "password", "ext", "role", "room_id", "image_path"); 
	insert("user", $columns, $values);
}

function getAllCustomer()
{
	$columns=array("name", "email", "ext", "role", "room_id", "image_path"); 
	$condition='';
	return select("user", $columns, $condition);
}

function getCustomer($email)
{
	$columns=array("name", "ext", "room_id", "image_path"); 
	$condition="where email= $email";
	return select("user", $columns, $condition);
}

function getAllRooms()
{
	return selectAll("room");
}

function updateCustomer($name, $email, $ext, $role, $room_id, $pic_path, $condition)
{
	$values=array($name, $email, $ext, $role, $room_id, $pic_path);
	$columns=array("name", "email", "ext", "role", "room_id", "image_path"); 
	update("user", $columns, $values, $condition);
}

function deleteCustomer($condition)
{
	delete("user", $condition);
}
?>

