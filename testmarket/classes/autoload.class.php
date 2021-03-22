<?php  

 	spl_autoload_register('autoLoad');

 	function autoLoad($class)
 	{
 		//echo strtolower($class) ."</br>";
 	
 		$path = __DIR__.DIRECTORY_SEPARATOR .strtolower($class). ".class.php";
 		//echo $path."</br>";
 		if (file_exists($path)) {
 			//echo "</br>working path </br>";
 			//echo $path;
 			//echo "</br>";

 			include $path;
 		}else{
 			include 'classes/dbconn.class.php';
 		}
 		
 		
 	}




?>