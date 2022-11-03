<?php
include('../admin/database.php');
session_start();
$id = $_POST['id'];
mysqli_query($conn,"delete from teacher_class_student where teacher_class_student_id = '$id'")or die(mysqli_error());
// $_SESSION['student_delete'] = 'Student Successfully deleted!';
// header('location:my_students.php');
?>

