<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['job_id']) && isset($_POST['candidate_name']) && isset($_POST['candidate_phone']) 
    && isset($_POST['candidate_email']) && isset($_POST['qualifications'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['job_id'];
	$p = $_POST['candidate_name'];
	$a = $_POST['candidate_phone'];
	$e = $_POST['candidate_email'];
	$q = $_POST['qualifications'];
	
	$sql = " INSERT INTO job_candidates VALUES( '$u', '$p', '$a' , '$e', '$q') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: ../View/customer_jobs.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: ../Controller/customer_apply_job.php");
	}
	
}


?>