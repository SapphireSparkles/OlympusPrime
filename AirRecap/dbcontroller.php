<?php
class DBController {
	private $host = "uwkp0008fa2e";
	private $user = "sa0392";
	private $password = "so_cal";
	private $database = "airrecap";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		mysqli_set_charset($conn,"utf8");
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>