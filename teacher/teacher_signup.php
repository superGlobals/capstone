<?php
include('../admin/database.php');
session_start();
if (isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$department_id = $_POST['department_id'];

$query = mysqli_query($conn,"select * from teacher where  firstname='$firstname' and lastname='$lastname' and department_id = '$department_id'")or die(mysqli_error());
$row = mysqli_fetch_array($query);
$id = $row['teacher_id'];

$count = mysqli_num_rows($query);
if ($count > 0){
	mysqli_query($conn,"update teacher set username='$username',password = '$password', teacher_status = 'Registered' where teacher_id = '$id'")or die(mysqli_error());
	$_SESSION['id']=$id;
	// $_SESSION['message'] = "Succesfully Added";
	header("location:index.php");
}else{
	echo "<script>alert('Data not found!')</script>";
	echo "<script>window.location.href = 'signup.php'</script>";
}
}
?>