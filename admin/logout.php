<?php
include("database.php");
include("includes/session.php");

$_SESSION['status'] = 'invalid';

mysqli_query($conn, "UPDATE `user_log` SET `logout_date`= NOW() WHERE `user_id`='$session_id'");

unset($_SESSION['username']);

header("location: ../index.php");


?>