<?php 
	
	define('sel', "SELECT ");
	define('sel_a', "SELECT * ");
	define('edit', 'UPDATE ');
	define('del', 'DELETE ');
	define('wh', ' WHERE ');
	define('fr', ' FROM ');
	interface interface_table {
		public function Select_tb();
		public function Select_id($id);
		public function Delete_tb($id);
		public function Update_tb($data);
		public function Insert_tb($data);
	}

 ?>