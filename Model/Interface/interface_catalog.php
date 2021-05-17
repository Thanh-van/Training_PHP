<?php 

/**
 * 
 */
require_once(__DIR__.'/interface_table.php');
define('Table_menu', 'menu');

interface interface_catalog extends interface_table 
{
	public function getName();
}

 ?>