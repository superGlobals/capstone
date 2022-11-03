<?php
include('../admin/database.php');
session_start();
if (isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$query_email = mysqli_query($conn,"SELECT * FROM teacher WHERE email = '$email' ")or die(mysqli_error());

	if (mysqli_num_rows($query_email) > 0) {
		$_SESSION['validate'] = 'Email Already Used';
		header("location: register.php");
	}elseif($password !== $cpassword){
       $_SESSION['password'] = "Confirm password not matched!";
       header('location:register.php');
    }

	else{

$query = mysqli_query($conn,"INSERT INTO `teacher`(`username`, `password`, `firstname`, `lastname`, `email`,`picture`, `teacher_status`, `date_of_request`) VALUES ('$username','$password','$firstname','$lastname','$email','img/NO-IMAGE-AVAILABLE.jpg','pending',NOW())")or die(mysqli_error());
$_SESSION['pending'] = 'Your account request is now pending for approval.';
     header('location:register.php');

}
}
?>