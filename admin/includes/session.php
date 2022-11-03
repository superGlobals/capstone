<?php
session_start();
$conn = mysqli_connect('localhost','root','','capstone1') or die(mysqli_error());
if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){

    $_SESSION['status'] == 'invalid';

    unset($_SESSION['username']);
    header("location: login.php");

  ?>
<?php
}
$session_id=$_SESSION['id'];
$user_query = mysqli_query($conn,"select * from users where id = '$session_id'")or die(mysqli_error());
?>


