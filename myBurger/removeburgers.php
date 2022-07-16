<?php

require_once('DBconnect.php');

if(isset($_POST['id'])){

	$u = $_POST['id'];

	
	$sql = " DELETE FROM burger WHERE Id = $u ";
	

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn)){
	
		//echo "Deleted Successfully";
		header("Location: burgertest.php");
	}
	else{
		//echo " Failed";
		header("Location: deleteburgers.php");
	}
	
}


?>