<?php
	session_start();
	include "database.php";

	
if (isset($_POST['add'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];



	$query = mysqli_query($conn,"SELECT * FROM `users` WHERE username = '$username'")or die(mysqli_error());

	if (mysqli_num_rows($query)> 0){
		$_SESSION['validate'] = "Username Already used!";
		header("location: admin_users.php");
	
	

	}else{
		mysqli_query($conn,"INSERT INTO `users`(`username`, `password`, `firstname`, `lastname`) VALUES ('$username','$password','$firstname','$lastname')")or die(mysqli_error());

		mysqli_query($conn, "INSERT INTO `activity_log`(`date`, `username`,  `action`) VALUES (NOW(), '$username','Add User $username')")or die(mysqli_error());

	$_SESSION['message'] = "Succesfully Added";
	
  ?>
<script>
window.location = "admin_users.php";
</script>
<?php

	}
}
?>

