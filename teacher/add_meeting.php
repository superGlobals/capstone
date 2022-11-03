<?php
include('../admin/database.php');

if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$meeting_id = $_POST['meeting_id'];
	$meeting_start = $_POST['meeting_start'];
	$class = $_POST['selector'];
	$description = $_POST['description'];
	$get_id = $_GET['id'];

	$query = mysqli_query($conn, "INSERT INTO `online_meeting`(`meeting_title`, `meeting_code`, `teacher_class_id`,`meeting_start`, `date_upload`, `description`) VALUES ('$title','$meeting_id','$class','$meeting_start',NOW(),'$description')");\
	mysqli_query($conn,"insert into notification (teacher_class_id,notification,date_of_notification,link) value('$class','Will Start meeting @ $meeting_start',NOW(),'join_meeting.php')")or die(mysqli_error());
	?>

	<script>
				window.location = 'online_meeting.php<?php echo '?id='.$get_id;  ?>';
			</script>
<?php
}
?>