<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['job_id'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['job_id'];
	//$p = $_POST['name'];
	//$a = $_POST['price'];
	
	$sql = " DELETE FROM job_listings WHERE job_id = '$u' ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Deleted Successfully";
		header("Location: ../View/admin_jobs.php");
	}
	else{
		//echo " Failed";
		header("Location: ../Controller/admin_add_jobs.php");
	}
	
}


?>