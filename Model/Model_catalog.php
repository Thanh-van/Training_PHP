<?php 

/**
 * 
 */
include_once 'Model/Connect.php';
include_once 'Interface/interface_catalog.php';
class Model_catalog extends Connect implements interface_catalog 
{
	private $con;
	function __construct()
	{
		$this->con=new Connect();
	}
	public function Select_tb($s=null)
	{
		$str="SELECT * FROM  category  ORDER BY order_tb ASC";
		$data=$this->con->Select($str);
		return $data;
	}
	public function getName()
	{
		echo "hihi";
	}
	public function Delete_tb($key){
		$str="DELETE FROM `category` WHERE id = '".$key."' OR parent_id ='".$key."'";
		$data= $this->con->delete($str);
	}
	public function Update_tb($data){
		
		if ($data['parent_id']==0) {
			$str="UPDATE  category  SET   parent_id ='".$data['parent_id']."', childen ='1', name ='".$data['name']."', order_tb ='".$data['order_tb']."', visible ='".$data['visible']."' WHERE id ='".$data['edit']."'";
		}else $str="UPDATE  category  SET   parent_id ='".$data['parent_id']."', childen ='0', name ='".$data['name']."', order_tb ='".$data['order_tb']."', visible ='".$data['visible']."' WHERE id ='".$data['edit']."'";
		$data=$this->con->Create_Update_tb($str);
		// print_r($str);
		// exit();
	}
	public function Insert_tb($data){
		if ($data['parent_id']==0) {
			 $str="INSERT INTO  category ( parent_id ,  childen ,  name ,  order_tb ,  visible ) VALUES ('".$data['parent_id']."','1','".$data['name']."','".$data['order_tb']."','".$data['visible']."')";
		}else  $str="INSERT INTO  category ( parent_id ,  childen ,  name ,  order_tb ,  visible ) VALUES ('".$data['parent_id']."','0','".$data['name']."','".$data['order_tb']."','".$data['visible']."')";
		$data=$this->con->Create_Update_tb($str);
	}
	public function Select_id($id){
		//echo $id;
	}

}


 ?>