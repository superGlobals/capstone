<?php
session_start();
 include('../admin/database.php');
$id = $_POST['id'];
$post_id = $_POST['post_id'];
$get_id = $_POST['get_id'];
$grade = $_POST['grade'];
$commend = $_POST['commend'];
mysqli_query($conn,"update student_send_assignment set grade = '$grade', teacher_commend ='$commend' where student_assignment_id = '$id'")or die(mysqli_error());
$_SESSION['message'] = 'Save successfuly!';


?>
<script>
 window.location = 'view_submit_assignment.php<?php echo '?id='.$get_id.'&'.'post_id='.$post_id; ?>'; 
</script>
