<?php

	include dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'classes/autoload.class.php';

	$addAdmin = new \controller\admin\AdminController;
	//echo $_POST['emailAdmin'];
	$addAdmin->addAdmin($_POST['emailAdmin'],$_POST['passwordAdmin']);




?>