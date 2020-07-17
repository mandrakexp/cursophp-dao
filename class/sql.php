<?php 

class Sql extends PDO {

	private $conn;

	public function __construct () {

		$this->conn =new PDO("mysql:host=localhost;dbname=dbphp7", "root", "setup123");

	}

	private function setParams($statment, $parameter = array ()){

		foreach ($parameter as $key => $value){

			$this->setParam($statment, $key, $value);
		}

	}

	private function setParam($statment, $key, $value){

		$statment->bindParam($key, $value);
	}

	public function query($rawQuery, $params = array())
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();
		
		return $stmt;

	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchall(PDO::FETCH_ASSOC);

	}

}

 ?>