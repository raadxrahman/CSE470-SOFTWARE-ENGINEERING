<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['id']) && isset($_POST['burger_name']) && isset($_POST['burger_size']) && isset($_POST['burger_price']) ){
	// write the query to check if this username and password exists in our database
	$c = $_POST['id'];
	$n = $_POST['burger_name'];
	$p = $_POST['burger_size'];
	$a = $_POST['burger_price'];
    // $cp = $_POST['customer_password'];
	
	$sql = " INSERT INTO burgers VALUES( '$c', '$n', '$p', '$a') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: ../View/admin_burgers.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: ../Controller/admin_add_burgers.php");
	}
	
}


?>