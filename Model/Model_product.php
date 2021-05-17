<?php 

/**
 * 
 */
include_once 'Model/Connect.php';
include_once 'Interface/interface_product.php';
class Model_product extends Connect implements interface_product 
{
	private $con;
	function __construct()
	{
		$this->con=new Connect();
	}
	public function Select_tb()
	{
		$str="SELECT * FROM  product  ORDER BY view ASC";
		$data=$this->con->Select($str);
		return $data;
	}
	public function getName()
	{
		echo "hihi";
	}
	public function Delete_tb($key){
		$str="DELETE FROM `product` WHERE id='".$key."' ";
		$data=$this->con->Create_Update_tb($str);
	}
	public function Update_tb($data){
		$str="UPDATE product SET id_category='".$data['id_category']."',name='".$data['name']."',img='".$data['img']."',introduce='".$data['introduce']."',sale='".$data['sale']."',price_new='".$data['price_new']."' WHERE id='".$data['edit']."' ";
		$data=$this->con->Create_Update_tb($str);
	}
	public function Insert_tb($data){
		$str="INSERT INTO  product (  id_category ,  name ,  img ,  introduce ,  sale ,  price_new ,  view ,  date ) VALUES ('".$data['id_category']."','".$data['name']."','".$data['img']."','".$data['introduce']."','".$data['sale']."','".$data['price_new']."','0','".date("Y-m-d")."' )";
		$data=$this->con->Create_Update_tb($str);
		// print_r($str);
		// exit();
	}
	public function Select_id($id){
		$str="SELECT * FROM  product  WHERE id='".$id."'";
		$data=$this->con->Select($str);
		return $data;
	}
	public function getcatalog($id){
		$str="SELECT * FROM  product  WHERE id_category='".$id."'";
		$data=$this->con->Select($str);
		return $data;
	}
}


 ?>