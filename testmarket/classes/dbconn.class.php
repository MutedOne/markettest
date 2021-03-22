<?php

	/**
	 * 
	 */
	class Dbconn 
	{
		private $servername = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname = "marketdb";
		
		protected function dbconnect()
		{
			


			try {
			  $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
			  // set the PDO error mode to exception
			  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
			//  echo "Connected successfully";

			  return $conn;
			} catch(PDOException $e) {
			  echo "Connection failed: " . $e->getMessage();
			}
		}

		public function testdbconn()
		{
			echo "this is dbconn</br>";
		}
	}


?>