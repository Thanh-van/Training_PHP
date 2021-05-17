<?php

/**
 * 
 */
session_start();
class Session
{
	
	//Gán session (SET)
	static function session_set($key, $val){
		
		$_SESSION[$key] = $val;
	}

	// Lấy session (GET)
	static function session_get($key){
		return (isset($_SESSION[$key])) ? $_SESSION[$key] : false;
	}

	// Xóa session (DELETE)
	static function session_delete($key){
		if (isset($_SESSION[$key])) {
			unset($_SESSION[$key]);
		}
	}
}



?>