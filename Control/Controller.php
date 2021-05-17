<?php
/**
 * 
 */
if (!defined('SITE_IS')) die('The request not found');
include_once 'lb/autoload.php';
include_once 'lb/config.php';
class Controller
{
	private $header;
	function __construct()
	{
		$this->header=new Config_lb();
	}
	public function Run()
	{
		if (isset($_GET['out'])) {
			include_once 'Control_login.php';
			Control_login::out();
		}
		if (isset($_GET['action'])) {
			if (file_exists(''.Url."_".$_GET['action'].".php".''))
			{
				Router::Prase_Url();

			}else{
				include_once 'View/404.php';
			}
		}else{
			new Router();
		}

	}
}

 ?>