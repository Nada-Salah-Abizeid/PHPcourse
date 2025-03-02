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
	$columns=array("id","name", "email", "ext", "role", "room_id", "image_path"); 
	$condition='';
	return select("user", $columns, $condition);
}

function getCustomer($id)
{
	$columns=array("name","email" ,"ext", "room_id", "image_path"); 
	$condition="id= $id";
	return select("user", $columns, $condition);
}

function getAllRooms()
{
	return selectAll("room");
}

function updateCustomer($id,$name, $email, $ext, $room_id, $pic_path)
{
	$values=array($name, $email, $ext, $room_id, $pic_path, $id);
	$columns=array("name", "email", "ext", "room_id", "image_path"); 
	$condition="id= ?";
	update("user", $columns, $values, $condition);
}

function deleteCustomer($id)
{
	$condition="id= $id";
	delete("user", $condition);
}
?>

