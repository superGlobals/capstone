<?php
include("database.php");

if (isset($_POST['submit'])) {
	$zoom_api_key = $_POST['zoom_api_key'];
	$zoom_api_secret_key = $_POST['zoom_api_secret_key'];

	$query = mysqli_query($conn, "insert into zoom_meeting_code (zoom_api_key, zoom_api_secret_key) values ('$zoom_api_key', '$zoom_api_secret_key')");
	if ($query) {
		echo "added";

	}else{
		echo "not";
	}
	} 



?>