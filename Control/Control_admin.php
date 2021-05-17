<?php 
define('url_admin', '?action=admin');
include_once 'lb/autoload.php';
session_start();
class Control_admin
{
	private $base;
	function __construct()
	{
		if (!isset($_SESSION['login'])) {
			header('location: index.php');
		}
		$this->base= Router::Model();	

	}
	public function Show()
	{
		$data1=$this->load_data();
		if (isset($_GET['view'])) {
			$view="&view=".$_GET['view'];
		}else $view="";

		$this->Create($view);
		$this->Delete($view);
		$this->Edit($view);
		$this->out();
		$menu=$this->post();
		include_once 'View/admin/index.php';
	}
	public function out()
	{
		if (isset($_GET['out'])) {
			Session::session_delete("mail");
			header('location: index.php'.url_admin);
		}
	}
	public function load_data()
	{
		if ($this->base_request()) {
			$data1 = $this->base->Select_tb();
		}else $data1 = $this->base->Select_tb();
		return $data1;
	}
	public function post()
	{
		if (isset($_GET['view'])=="post") {
			$this->base=new Model_catalog();
			$menu = $this->base->Select_tb();
			return $menu;
		}
	}
	public function Create($view)
	{
		if (isset($_POST['add'])) {
			$this->base->Insert_tb($_POST);
			header('location: index.php'.url_admin.$view);
		}
	}
	public function Delete($view)
	{
		if (isset($_GET['del'])) {
			$this->base->Delete_tb($_GET['del']);
			header('location: index.php'.url_admin.$view);
		}
	}
	public function Edit($view)
	{
		if (isset($_POST['edit'])) {
			$this->base->Update_tb($_POST);
			header('location: index.php'.url_admin.$view);
		}
	}
	public function Check_model()
	{
		if ($this->base) {
			return true;
		}else return false;
	}
	public function base_request()
	{
		if (!$this->Check_model()) {
			include_once 'Model/Model_catalog.php';
			$this->base=new Model_catalog();
			return true;
		}else return false;
	}
}

?>