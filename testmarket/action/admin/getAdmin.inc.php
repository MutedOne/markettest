<?php
	include dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'classes/autoload.class.php';
	$signInAdminDetail = new \controller\admin\AdminController;
	
	$signInAdminDetail->signInAdmin($_POST['emailAdminLogin'],$_POST['passwordAdminLogin']);
?>