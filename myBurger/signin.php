<?php

require_once('DBconnect.php');

if(isset($_POST['fname']) && isset($_POST['pass'])){
	$u = $_POST['fname'];
	$p = $_POST['pass'];
	$sql = "SELECT * from admin WHERE Id = '$u' AND password = '$p'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) != 0){
		//echo "Enter";
		header("Location: hometest.php");
		
	}
	else{
		//echo "/Password Wrong";
		header("Location: index.php");
		
	}

}


?>