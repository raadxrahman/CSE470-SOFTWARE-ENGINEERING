<?php

require_once('DBconnect.php');

if(isset($_POST['burger_id'])){

	$u = $_POST['burger_id'];

	
	$sql = " DELETE FROM burgers WHERE burger_id = '$u' ";
	

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn)){
	
		//echo "Deleted Successfully";
		header("Location: ../View/admin_burgers.php");
	}
	else{
		//echo " Failed";
		header("Location: ../Controller/admin_remove_burgers.php");
	}
	
}


?>