<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['job_id']) && isset($_POST['designation']) && isset($_POST['vacancy'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['job_id'];
	$p = $_POST['designation'];
	$a = $_POST['vacancy'];
	
	$sql = " INSERT INTO job_listings VALUES( '$u', '$p', '$a' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: admin_jobs.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: admin_add_jobs.php");
	}
	
}


?>