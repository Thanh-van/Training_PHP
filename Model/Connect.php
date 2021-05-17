<?php 

/**
 * 
 */
include_once 'lb/config.php';
class Connect 
{
	private $conn=null;
	function __construct()
	{
		$this->connect();
	}
	public function connect()
	{
		$this->conn=new mysqli(host,user,pass,db) or die("Lỗi");
		mysqli_set_charset($this->conn,'utf8');
	}
	public function db_close(){
		if ($this->conn != null) {
			mysqli_close($this->conn);
		}
	}
	public function Select($str)
	{
		$result=$this->conn->query($str);
		if ($result->num_rows==0) {
			$data=0;
		}else{
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	public function login($str)
	{
		$result=$this->conn->query($str);
		if ($result->num_rows==0) {
			$data=0;
		}else{
			$data= 1;
		}
		return $data;
	}
	public function delete($id)
	{
		$str="DELETE FROM user WHERE id = '".$id."' ";
		$result=$this->conn->query($str);
	}
	public function Create_Update_tb($str)
	{
		$result=$this->conn->query($str);
	}
}


?>