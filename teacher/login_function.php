<?php
 include('../admin/database.php');

    session_start();
    if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query_teacher = mysqli_query($conn,"SELECT * FROM teacher WHERE username='$username' AND password='$password' AND teacher_status='approved'")or die(mysqli_error());
    $num_row_teacher = mysqli_num_rows($query_teacher);
    $row_teahcer = mysqli_fetch_array($query_teacher);
    $fname = $row_teahcer['firstname'];
    $lname = $row_teahcer['lastname'];
    if( $num_row_teacher > 0 ) { 
    $_SESSION['id']=$row_teahcer['teacher_id'];
   mysqli_query($conn, "INSERT INTO teacher_log (username, full_name, login_date, user_id ) VALUES          ('$username','$fname $lname', NOW(),".$_SESSION['id'].")")or die(mysqli_error());
    header("location:home.php");
    }else{ 
        $_SESSION['error'] = 'You have entered an invalid username or password.';
        header('location:index.php');
    } 
    }
   

?>