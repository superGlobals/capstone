
<?php
session_start();
include('../admin/database.php');
$id = $_POST['id'];
mysqli_query($conn,"delete from teacher_class_student where teacher_class_student_id = '$id'")or die(mysqli_error());
header('location: my_students.php');
?>

