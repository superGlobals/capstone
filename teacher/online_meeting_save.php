<?php
 include('../admin/database.php');

if (isset($_POST['submit'])) {
	$meeting_title = $_POST['meeting_title'];
	$meeting_code = $_POST['meeting_code'];
	$selector = $_POST['selector'];
	$description = $_POST['description'];
	$get_id = $_GET['id'];
		
	$query = mysqli_query($conn, "INSERT INTO `online_meeting`(`meeting_title`, `meeting_code`,`teacher_class_id`, `date_upload`, `description`) VALUES ('$meeting_title', '$meeting_code','$selector',NOW(),'$description')");

	?>

	<script>
				window.location = 'online_meeting.php<?php echo '?id='.$get_id;  ?>';

			</script>
<?php			
}

?>