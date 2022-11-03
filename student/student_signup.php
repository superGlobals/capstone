
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
$class_id = $_POST['class_id'];
move_uploaded_file($_FILES["image"]["tmp_name"], "../teacher/img/" . $_FILES["image"]["name"]);
$location = "img/" . $_FILES["image"]["name"];


$check_email = mysqli_query($conn,"SELECT * FROM student WHERE email = '$email'")or die(mysqli_error());

	if (mysqli_num_rows($check_email) > 0) {
		$_SESSION['validate'] = 'Email Already Used';
		header("location: register.php");
	}
$check_username = mysqli_query($conn,"SELECT * FROM student WHERE username = '$username' ")or die(mysqli_error());
	if(mysqli_num_rows($check_username) > 0) {
		$_SESSION['validate_username'] = 'Username Already Used';
		header("location: register.php");
	}
	elseif($password !== $cpassword){
       $_SESSION['password'] = "Confirm password not matched!";
       header('location:register.php');
    }
	else{
$query = mysqli_query($conn, "INSERT INTO `student`(`firstname`, `lastname`, `class_id`, `username`, `password`, `email`, `picture`, `student_cor`, `student_status`, `date_of_request`) VALUES ('$firstname','$lastname','$class_id','$username','$password','$email','img/NO-IMAGE-AVAILABLE.jpg', '$location', 'pending',NOW())");
$_SESSION['pending'] = 'Your account request is now pending for approval.';
     header('location:register.php');
}
}
?>