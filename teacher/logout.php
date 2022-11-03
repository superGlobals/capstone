<?php
include('../admin/database.php');
include('include/session.php');
mysqli_query($conn, "UPDATE `teacher_log` SET `logout_date`= NOW() WHERE `user_id`='$session_id'");
session_destroy();
header('location:../login_page.php');
?>