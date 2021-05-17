<?php 

session_start();

class Control_login
{
	private $base;
	function __construct()
	{
		include_once 'Model/Model_user.php';
		$this->base=new Model_user();
	}
	public function Show()
	{
		$this->login();
		$this->out();
		include_once Url_tem.'/Login.php';;
	}
	public function login(){
		
		if (isset($_POST['login'])) {

			$data=$this->base->Select_id($_POST);
			// print_r($data);
			// exit();
			if ($data !=0) {
				Session::session_set("login",$data);
				if ($data[0]['level'] == 0) {
					// echo $data['level'];
					header('location: index.php?action=admin');
				}else
					header('location: index.php');
			}else
			echo "false";
		}
	}
	public function out()
	{
		if (isset($_GET['out'])) {
			Session::session_delete("login");			
			//header('location: index.php'.url_admin);
		}
	}
}

?>