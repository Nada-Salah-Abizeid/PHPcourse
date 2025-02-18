<?php
include_once('config.php');

try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //insert
    function insert($table, $columns, $values)
    {
        global $conn; 

        $placeholders = trim(str_repeat('?,', count($values)), ','); 
        $sql = "INSERT INTO $table (".implode(",", $columns).") VALUES ($placeholders)";
        $stmt = $conn->prepare($sql);
        $stmt->execute($values);
        echo "New records created successfully<br>";
    }
		
    //select all
    function selectAll($table)
    {
        global $conn;
	        
        $stmt = $conn->prepare("SELECT * FROM $table");
        $stmt->execute();
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }	

    //select
    function select($table, $columns, $condition)
    {
        global $conn;
	$col=implode(",", $columns);
        if(empty($condition)) {
        	$stmt = $conn->prepare("SELECT $col FROM $table");
	}else{
		$stmt = $conn->prepare("SELECT $col FROM $table WHERE $condition");
	}
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      
    }

    //delete
    function delete($table, $condition)
    {
        global $conn;

        $sql = "DELETE FROM $table WHERE $condition";
        $conn->exec($sql);
        
        echo "Record deleted successfully<br>";
    }


    //update
    function update($table, $columns, $values, $condition)
    {
	if(count($values)==count($columns))
	{
	        global $conn;
	
        	$setClause = "";
	        foreach ($columns as $index => $column) {
        	    $setClause .= "$column = :$column";
        	    if ($index < count($columns) - 1) {
        	        $setClause .= ", ";
        	    }
        	}
        	$sql = "UPDATE $table SET $setClause WHERE $condition";
        	$stmt = $conn->prepare($sql);
        	foreach ($values as $key => $value) {
        	    $stmt->bindValue(":$key", $value);
        	}
        	$stmt->execute();
        	echo $stmt->rowCount()."Records UPDATED successfully<br>";
	}else{
		echo "Number of columns and values are not identical.<br>";
	}
    }	


} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


//$conn = null;
?>

