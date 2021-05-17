<?php 

	/**
	 * 
	 */
	class Router
	{
		function __construct()
		{
			include_once Url."_user.php";
			$clas = 'Control_user';
			$clas=new $clas();
			$clas->Show();
		}
		static function Prase_Url()
		{
			
			include_once Url."_".$_GET['action'].".php";
			$clas = 'Control_'.$_GET['action'];
			$clas=new $clas();
			$clas->Show();
				//return $clas;
		}
		static function Model()
		{
			if (isset($_GET['view'])) {
				if (file_exists(Url_model."_".$_GET['view'].".php"))
				{
					include_once Url_model."_".$_GET['view'].".php";
					$function = 'Model_'.$_GET['view'];
					$function=new $function();
					// //echo $function;
					// exit();
					return $function;
				}
				
			}
		}
		static function View_admin($data,$menu)
		{
			if (isset($_GET['view'])) {
				if (file_exists(Url_admin.$_GET['view'].".php"))
				{
					include_once  Url_admin.$_GET['view'].".php";
				}else{
					include_once Url_admin.'404.php';
				}
			}else
			{
				include_once Url_admin.'catalog.php';
			}
		}
		static function View_user($data,$menu)
		{
			if (isset($_GET['view'])) {
				if (file_exists(Url_public."in/".$_GET['view'].".php"))
				{
					include_once  Url_public."in/".$_GET['view'].".php";
				}else{
					include_once Url_admin.'404.php';
				}
			}else
			{
				include_once Url_public."in/".'home.php';
			}
		}
	}

	?>