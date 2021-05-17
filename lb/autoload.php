<?php 
	
	spl_autoload_register('autoload');
	
	function autoload($calss)
	{
		$path="lb/";
		$extension=".php";
		$fullpath = $path . $calss . $extension;
		if (file_exists($fullpath)) {
			include_once $fullpath;
		}
	}

 ?>