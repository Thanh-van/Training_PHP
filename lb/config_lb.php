<?php 

/**
 * 
 */
include_once 'Model/Model_catalog.php';

class Config_lb
{
	private $base;
	function __construct()
	{
		$this->base=new Model_catalog();
	}
	public function data_header()
	{
		$this->base=new Model_catalog();
		$data_header = $this->base->Select_tb();
		$menu = array();
		$menu1  = array();
		foreach ($data_header as $key => $value) {
			if ($value['parent_id'] ==0) {
				array_push($menu,$value); 
			}
			else array_push($menu1,$value);
		}
		$data=array('menu' => $menu,
		'menu1'=>$menu1 );
		return $data;
	}
}

 ?>