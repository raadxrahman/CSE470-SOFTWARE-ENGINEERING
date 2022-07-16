<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['sid']) && isset($_POST['sname']) && isset($_POST['cls']) && isset($_POST['address'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['sid'];
	$p = $_POST['sname'];
	$c = $_POST['cls'];
	$a = $_POST['address'];
	
	$sql = " INSERT INTO student VALUES( '$u', '$p', '$c', '$a' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_students.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_student.php");
	}
	
}


?>