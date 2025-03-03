<?php
class User
{

	private $db;
	public function __construct(Database $db)
	{
		$this->db= $db;
	}
	
	public function insertCustomer($name, $email, $password, $ext, $role, $room_id, $pic_path)
	{
		$password_hash = password_hash($password, PASSWORD_DEFAULT);
		$values=array($name, $email, $password_hash, $ext, $role, $room_id, $pic_path);
		$columns=array("name", "email", "password", "ext", "role", "room_id", "image_path"); 
		$this->db->insert("user", $columns, $values);
	}	

	public function getAllCustomer()
	{  
		$columns=array("id","name", "email", "ext", "role", "room_id", "image_path"); 
		$condition='';
		return $this->db->select("user", $columns, $condition);
	}

	public function getCustomer($id)
	{
		$columns=array("name","email" ,"ext", "room_id", "image_path"); 
		$condition="id= $id";
		return $this->db->select("user", $columns, $condition);
	}

	public function updateCustomer($id,$name, $email, $ext, $room_id, $pic_path)
	{
		$values=array($name, $email, $ext, $room_id, $pic_path, $id);
		$columns=array("name", "email", "ext", "room_id", "image_path"); 
		$condition="id= ?";
		$this->db->update("user", $columns, $values, $condition);
	}

	public function deleteCustomer($id)
	{
		$condition="id= $id";
		$this->db->delete("user", $condition);
	}
}

?>

