<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['side_id']) && isset($_POST['side_name']) && isset($_POST['side_size']) && isset($_POST['side_price']) ){
	// write the query to check if this username and password exists in our database
	$c = $_POST['side_id'];
	$n = $_POST['side_name'];
	$p = $_POST['side_size'];
	$a = $_POST['side_price'];
    // $cp = $_POST['customer_password'];
	
	$sql = " INSERT INTO sides VALUES( '$c', '$n', '$p', '$a') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: ../View/admin_sides.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: ../View/admin_sides.php");
	}
	
}


?>