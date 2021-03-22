<?php
	
	namespace model\admin;
	/**
	 * 
	 */
	class ModelAdmin extends \Dbconn
	{
		
		protected function setAdmin($emailAdmin,$emailPassword)
		{
			$sql = "INSERT INTO admin(emailAdmin,passAdmin) VALUES (?,?)";
			$result=$this->dbconnect()->prepare($sql);
			$result->execute([$emailAdmin,$emailPassword]);
		}

		protected function getAdmin($emailAdmin,$emailPassword)
		{
			$sqlCheck = "SELECT * FROM admin WHERE emailAdmin = '$emailAdmin'";
			$resultCheck = $this->dbconnect()->query($sqlCheck);
			$resultCheck = $resultCheck->fetchAll();
			foreach ($resultCheck as $value) {
					$verpass = password_verify($emailPassword, $value['passAdmin']);

			}
			return $verpass;
		}


		protected function getAlldealer()
		{
			$sql= "SELECT * FROM dealer";
			$result = $this->dbconnect()->query($sql);
			$result = $result->fetchAll();

			return $result;
		}
		protected function onedealer($dealPro)
		{
			$sql= "SELECT * FROM products WHERE dealerProId = '$dealPro'";
			$result = $this->dbconnect()->query($sql);
			$result = $result->fetchAll();

			return $result;
		}




		public function testmodelAdmin()
		{
			$this->testdbconn();
			echo "this is testmodelAdmin </br>";
		}
	}


?>