<?php
 include('../admin/database.php');
include('include/session.php');
if (isset($_POST['read'])){
$get_id = $_GET['id'];
$check_id=$_POST['selector'];
$N = count($check_id);
for($i=0; $i < $N; $i++)
{
	
	mysqli_query($conn,"insert into notification_read_teacher (teacher_id,student_read,notification_id) values('$session_id','yes','$check_id[$i]')")or die(mysqli_error());	

	// mysqli_query($conn,"update teacher_notification set status = 'check' where student_id = '$get_id' order by date_of_notification");


}
?>
<script>
window.location = 'notification.php';
</script>
<?php
}
?>