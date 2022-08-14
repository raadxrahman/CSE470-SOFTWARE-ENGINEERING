<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['customer_id']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['customer_password'])){
	// write the query to check if this username and password exists in our database
	$c = $_POST['customer_id'];
	$n = $_POST['name'];
	$p = $_POST['phone'];
	$a = $_POST['address'];
    $cp = $_POST['customer_password'];
	
	$sql = " INSERT INTO customer_list VALUES( '$c', '$n', '$p', '$a' , '$cp') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: CustomerLogin.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: customer_register_page.php");
	}
	
}


?>