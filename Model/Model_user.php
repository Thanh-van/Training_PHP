<?php 

/**
 * 
 */
include_once 'Model/Connect.php';
include_once 'Interface/interface_user.php';
class Model_user extends Connect implements interface_user 
{
	private $con;
	function __construct()
	{
		$this->con=new Connect();
	}
	public function Select_tb()
	{
		$str="SELECT * FROM  user ";
		$data=$this->con->Select($str);
		return $data;
	}
	public function getName()
	{
		echo "hihi";
	}
	public function Delete_tb($key){
		
	}
	public function Update_tb($data){
		
	}
	public function Insert_tb($data){
		$str="INSERT INTO  category (parent_id ,  childen ,  name ,  order_tb ,  visible ) VALUES ('".$data['parent_id']."','".$data['childen']."','".$data['name']."','".$data['order_tb']."','".$data['visible']."')";
		
	}
	public function Select_id($id){

		$str="SELECT * FROM  user  WHERE mail = '".$id['mail']."' and   pass = '".$id['pass']."'";
		
		$data=$this->con->Select($str);
		//'OR 1=1 /*
		return $data;
	}
}


 ?>