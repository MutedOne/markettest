<?php
	namespace controller\admin;

	/**
	 * 
	 */
	class AdminController extends \model\admin\ModelAdmin
	{
		public function addAdmin($emailAdmin,$emailPassword)
		{
			$Oldpass = password_hash($emailPassword, PASSWORD_DEFAULT);
			$this->setAdmin($emailAdmin,$Oldpass);
		}

		public function signInAdmin($adminEmail,$adminPassword)
		{

			$result = $this->getAdmin($adminEmail,$adminPassword);
			if ($result > 0) {
				echo "has";
				$cut = explode('@', $adminEmail);
				session_start();
				$_SESSION['admin']=$cut[0];
				header("location: ../../admininterface.php");
			}else{
				echo "no user";
				header("location: ../../adminlogin.php");
			}

		}
		
		public function testAdminCon()
		{
			echo "this is  testAdminCon()</br> ";
			$this->testmodelAdmin();
		}
	}


?>