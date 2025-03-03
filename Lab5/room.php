<?php
class Room
{

	private $db;
	public function __construct(Database $db)
	{
		$this->db= $db;
	}
	
	
	public function getAllRooms()
	{
		return $this->db->selectAll("room");
	}
}

?>

