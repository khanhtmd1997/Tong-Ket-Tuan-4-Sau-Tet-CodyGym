<?php
	function saveDataJSON($filename,$email,$password){
		if($filename && $email $password){
			return true;
		}else return false
	}
	 try {
	   saveDataJSON();
	   /* If the exception is thrown, this text will not be shown */
	   echo 'If you see this, the number is 1 or below';
	 }
	 
	 /* catch exception */
	 catch(Exception $e) {
	   echo 'Message: ' .$e->getMessage();
	 }
?>