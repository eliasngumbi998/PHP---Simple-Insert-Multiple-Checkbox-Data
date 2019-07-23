<?php
	require_once 'conn.php';
 
	if(ISSET($_POST['save'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
 
 
		$subjects=implode(", ", $_POST['subject']);
 
		mysqli_query($conn, "INSERT INTO `member` VALUES('', '$firstname', '$lastname', '$subjects')") or die(mysqli_error());
 
		header('location:index.php');
	}
 
 
?>
