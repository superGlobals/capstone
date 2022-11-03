<?php
    session_start();
   include('../admin/database.php');

    if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

  $query = "SELECT * FROM student WHERE username='$username' AND password='$password' AND student_status='approved'";
			$result = mysqli_query($conn,$query)or die(mysqli_error());
			$row = mysqli_fetch_array($result);
			$count = mysqli_num_rows($result);
   if( $count > 0 ) { 
		$_SESSION['id']=$row['student_id'];
		header("location:home.php");	
    }else{ 
         $_SESSION['error'] = 'You have entered an invalid username or password.';
        header('location:index.php');
    } 
    }
   

?>