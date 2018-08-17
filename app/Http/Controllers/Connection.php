<?php

namespace App\Http\Controllers;

class Connection
{
	public $conn;
	
	public function connectToDB(){
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "top_studentreg";

		// Create connection
		$this->conn = new \mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($this->conn->connect_error) {

			return null;
		    //die("Connection failed: " . $conn->connect_error);
		}else{
			return $this->conn;
		}
	}
}