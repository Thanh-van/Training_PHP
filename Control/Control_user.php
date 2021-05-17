<?php 
	include_once 'lb/autoload.php';
	include_once 'Control/Control_login.php';
	class Control_user
	{
		private $base;
		private $data;
		private $menu;
		function __construct()
		{
			if (isset($_SESSION['login']) && $_SESSION['login'][0]['level'] == "0") {
			header('location: index.php?action=admin');
			}
			$this->base= new Config_lb();
			
			//$this->base=new Basemodel();
		}
		public function Show()
		{
			$menu=$this->base->data_header();
			$data=$this->base();
			if (isset($_GET['view'])) {
				$data=$this->product();
				$data=$this->Catalog();
			}
			
			include_once 'View/public/index.php';
		}
		public function product()
		{
			if ($_GET['view']=="product") {
				$this->base=new Model_product();
				$data=$this->base->Select_id($_GET['p']);
				return $data;
			}
		}
		public function Catalog()
		{
			if ($_GET['view']=="catalog") {
				$this->base=new Model_product();
				$data=$this->base->getcatalog($_GET['c']);
				return $data;
			}
		}
		public function Home()
		{
			$this->base();
			
		}
		public function base()
		{
			include_once 'Model/Model_product.php';
			$this->base=new Model_product();
			$data=$this->base->Select_tb();
			return $data;
		}
	}

 ?>