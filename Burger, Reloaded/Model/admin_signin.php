<?php

require_once('DBconnect.php');

if(isset($_POST['fname']) && isset($_POST['pass'])){
	$u = $_POST['fname'];
	$p = $_POST['pass'];
	$sql = "SELECT * from admin_table WHERE admin_id = '$u' AND admin_password = '$p'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) != 0){
		//echo "Enter";
		header("Location: ../Controller/admin_home.php");
		
	}
	else{
		//echo "/Password Wrong";
		header("Location: ../Controller/admin_login.php");
		
	}

}


?>