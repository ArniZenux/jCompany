<?php
	include('connect_db.php');
	if(isset($_POST['submit'])){
		$USER = $_POST['user'];
		$PASS = $_POST['pass'];
		$sqlString = "SELECT * FROM tblUser WHERE user = '$USER' AND pass = '$PASS';";
		$result = $db->query($sqlString);
		$row = $result->fetacArray(); 

		if($row[1] == $USER){
			ob_start();
			header('Location: company.php');
			exit(); 
		}
		else{
			$Message = "Notandi eða lykliorð er ekki rétt";
		}
	}	
?>