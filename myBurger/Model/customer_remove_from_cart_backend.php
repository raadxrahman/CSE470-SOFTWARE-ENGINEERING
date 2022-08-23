<?php

require_once('DBconnect.php');

if(isset($_POST['item_id'])){

	$u = $_POST['item_id'];

	
	$sql = " DELETE FROM cart WHERE Id = '$u' ";
	

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn)){
	
		//echo "Deleted Successfully";
		header("Location: ../View/customer_cart.php");
	}
	else{
		//echo " Failed";
		header("Location: ../View/customer_cart.php");
	}
	
}


?>