<?php  
/**
* 
*/
class Db
{
	static private $conn = null;

	function __construct()
	{
		self::$conn = self::connect();
		return self::getInstance();
	}

	static function connect()
	{
		try {
			$result = new PDO('mysql:host=localhost;dbname=college','root','root');
			return self::$conn = $result;
		} catch (PDOException $e) {
			return die($e->getMessage());
		}
	}

	public static function getInstance()
	{
		if (self::$conn) {
			return self::$conn;
		}
		return self::$conn = self::connect();
	}

	function query($sql,$value=null)
	{
		$result = self::$conn->prepare($sql);
		$result->execute($value);
		return $result;	
	}

	function deleteById($table,$value)
	{
		$sql = "DELETE FROM $table WHERE id=?";
		$result = self::$conn->prepare($sql);
		$result->execute($value);
		return $result;	
	}

	function disableById($table,$value)
	{
		$sql = "UPDATE $table SET status='0' WHERE $table.id=?";
		$result = self::$conn->prepare($sql);
		$result->execute($value);
		return $result;			
	}

	function insertQuery($table,$data)
	{
		$keys = array_keys($data);
		$key = null;
		$value = null;
		for ($i=0; $i < count($keys); $i++) { 
			if ($i == (count($keys)-1) ) {
				$key .= " $keys[$i] ";
				$value .= " ? ";
			}else{
				$key .= " $keys[$i] ,";
				$value .= "?,";
			}
		}

		$sql = "INSERT INTO $table ($key) VALUES ($value)";
		$result = self::$conn->prepare($sql);
		$result = $result->execute(array_values($data));
		return $result;	
	}
	
	function fetchObject($executesql)
	{
		$result =$executesql->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}

	function fetchArray($executesql)
	{
		$result =$executesql->fetchAll(PDO::FETCH_BOTH);
		return $result;
	}

	function getLastId()
	{
		return self::$conn->lastInsertId();
	}

	protected function getById($table,$id,$param=null)
	{
		$sql = "SELECT * FROM $table WHERE id=? AND status=1";
		if (!empty($param)) {
			$sql = "SELECT * FROM $table WHERE $param=?";
		}
		if (count($id) > 1) {
			for ($i = 0; $i < count($id); $i++) {
				$query = $this->query($sql,[$id[$i]]);
				$data[$i] = $this->fetchObject($query);
			}
			return $data;
		}
		
		$query = $this->query($sql,[$id]);
		return $this->fetchObject($query);
	}

	protected function updateDetail($table,$data,$id)
	{
		$sql = "UPDATE $table SET ";
		$key = array_keys($data);
		$values = array_values($data);
		
		for ($i=0; $i < count($data) ; $i++) { 
			if ($i == (count($data)-1)) {
				$sql .= "$key[$i] = ? WHERE id=?";
				$values[count($data)] = $id;
			}else{
				$sql .= "$key[$i] = ?,";
			}
		}
		return $this->query($sql,$values);
	}


}
