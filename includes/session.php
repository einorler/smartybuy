<?php 
	session_start();
	
	function display_message(){
		if(isset($_SESSION['message'])){
			$message = htmlentities($_SESSION['message']);
			$_SESSION['message'] = null;
			return $message;
		}
	}
 ?>
