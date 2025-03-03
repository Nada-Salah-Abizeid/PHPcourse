<?php

class Database
{
	private $conn;
	public function __construct(Config $config)
	{
		try {
			$this->conn = new PDO("mysql:host=" . $config->getHost() . ";dbname=" . $config->getDatabase() , $config->getUser(), $config->getPassword());
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
    			die( "Connection failed: " . $e->getMessage());
		}
	}
	
	
	public function insert($table, $columns, $values)
	{
		$placeholders = trim(str_repeat('?,', count($values)), ','); 
		$sql = "INSERT INTO $table (".implode(",", $columns).") VALUES ($placeholders)";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute($values);
		echo "New records created successfully<br>";
	}
	

	public function selectAll($table)
	{			
		$stmt = $this->conn->prepare("SELECT * FROM $table");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}	


	public function select($table, $columns, $condition)
	{
		$col=implode(",", $columns);
		if(empty($condition)) {
			$stmt = $this->conn->prepare("SELECT $col FROM $table");
		}else{
			$stmt = $this->conn->prepare("SELECT $col FROM $table WHERE $condition");
		}
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	      
	}


	public function delete($table, $condition)
	{
		$sql = "DELETE FROM $table WHERE $condition";
		$this->conn->exec($sql); 
	}


	public function update($table, $columns, $values, $condition)
	{
		if(count($values)==count($columns)+1)
		{	
			$setClause = implode(" = ?, ", $columns) . " = ?";		
			$sql = "UPDATE $table SET $setClause WHERE $condition";
			$stmt = $this->conn->prepare($sql);        	       
			$stmt->execute($values)  ;   		
		}else{
			echo "Number of columns and values are not identical.<br>";
		}
	}
}

?>

