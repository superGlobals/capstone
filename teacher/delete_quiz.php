<?php
	session_start();
	include('../admin/database.php');

	if(isset($_GET['id'])){
		$query = "DELETE FROM quiz WHERE quiz_id = '".$_GET['id']."'";
		$results = mysqli_query($conn, $query);
		
		if($results){
			$_SESSION['quiz_delete'] = 'Quiz deleted successfully!';
			header('location: teacher_quiz.php');

		}
		}
	?>